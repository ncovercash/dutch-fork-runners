<?php

$limit = 15;
$dir = "../../ig/";
$apiKey = getenv('INSTAGRAM_API_KEY');

echo 'API Key: <' . strlen($apiKey) . ' characters>' . PHP_EOL;

@mkdir($dir, 0777, true);

$db = new PDO("sqlite:{$dir}ig.db");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec(<<<SQL
CREATE TABLE IF NOT EXISTS posts (
    id TEXT PRIMARY KEY,
    permalink TEXT,
    caption TEXT,
    is_video INTEGER,
    files TEXT,
    created_at DATETIME
)
SQL
);

$initialIds = $db->query("SELECT id FROM posts")->fetchAll(PDO::FETCH_COLUMN);
echo 'Found ' . count($initialIds) . ' currently saved posts' . PHP_EOL;

$posts = json_decode(
  file_get_contents(
    "https://graph.instagram.com/me/media"
    . "?fields=id,caption,media_type,media_url,permalink,timestamp,thumbnail_url"
    . "&limit=$limit&access_token=$apiKey"
  ),
  true);

$currentIds = [];

foreach ($posts['data'] as $post) {
  $currentIds[] = $post['id'];

  if (in_array($post['id'], $initialIds)) {
    continue;
  }

  $media = [];

  switch ($post['media_type']) {
    case 'IMAGE':
      $media = [$post['media_url']];
      break;
    case 'VIDEO':
      $media = [$post['thumbnail_url']];
      break;
    case 'CAROUSEL_ALBUM':
      $carousel = json_decode(
        file_get_contents(
          "https://graph.instagram.com/{$post['id']}/children"
          . "?fields=id,media_url"
          . "&access_token=$apiKey"
        ),
        true);

      $media = array_column($carousel['data'], 'media_url');
      break;
    default:
      echo "Unknown media type: {$post['media_type']}" . PHP_EOL;
      continue 2;
  }

  echo "Discovered new post {$post['id']} ({$post['media_type']}) with " . count($media) . " files" . PHP_EOL;

  for ($i = 0; $i < count($media); $i++) {
    echo 'Downloading file ' . ($i + 1) . ' of ' . count($media) . PHP_EOL;
    // download and compress
    $file = file_get_contents($media[$i]);
    $hash = hash('sha256', $file);
    $path = "$dir$hash";
    file_put_contents("$path.tmp", $file);

    // thumbnail with imagick
    $imagick = new Imagick("$path.tmp");
    $imagick->setImageFormat('webp');
    $imagick->thumbnailImage(640, 0);
    $imagick->writeImage("$path.webp");
    $imagick->clear();
    $imagick->destroy();

    unlink("$path.tmp");

    $media[$i] = "$hash.webp";
  }

  $stmt = $db->prepare("INSERT INTO posts (id, permalink, is_video, caption, files, created_at) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->execute([
    $post['id'],
    $post['permalink'],
    $post['media_type'] === 'VIDEO' ? 1 : 0,
    $post['caption'],
    implode(',', $media),
    $post['timestamp']
  ]);
}

$old = array_diff($initialIds, $currentIds);
echo 'Found ' . count($old) . ' posts to delete' . PHP_EOL;

foreach ($old as $id) {
  $stmt = $db->prepare("SELECT files FROM posts WHERE id = ?");
  $stmt->execute([$id]);
  $files = $stmt->fetchColumn();

  foreach (explode(',', $files) as $file) {
    unlink("$dir$file");
  }

  $db->exec("DELETE FROM posts WHERE id = '$id'");
}
