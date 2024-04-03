<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Markdown;
use \DutchForkRunners\Images\Media;
use \DutchForkRunners\Instagram\Instagram;
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "home");
define("PAGE_TITLE", "Home");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Dutch Fork Cross Country");
?>
<div class="row">
  <div class="col s3 hide-on-med-and-down">
    <a class="twitter-timeline col s3" href="https://twitter.com/DFRunners?ref_src=twsrc%5Etfw">Tweets by DFRunners</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
  </div>
  <div class="section col l9 s12">
    <?= Markdown::convert(file_get_contents(REAL_ROOTDIR . "md/home.md")) ?>

    <?php

    $posts = Instagram::getPosts();

    $cards = [];

    foreach ($posts as $post) {
      foreach (explode(",", $post["files"]) as $link) {
        $media = new Media('ig', '', $link, $post["is_video"], $post["caption"]);
        $cards[] = $media->getCard('', null, true, $post["permalink"]);
      }
    }

    $bisected = [[], []];
    $trisected = [[], [], []];

    for ($i = 0; $i < count($cards); $i++) {
      $bisected[$i % 2][] = $cards[$i];
      $trisected[$i % 3][] = $cards[$i];
    }

    if (count($cards) == 0): ?>
      <p class="flow-text">We're updating our feed just for you - please reload in a few seconds.</p>
    <?php else: ?>
      <div class="col s12 m6 hide-on-large-only">
        <?= implode("", $bisected[0]) ?>
      </div>
      <div class="col s12 m6 hide-on-large-only">
        <?= implode("", $bisected[1]) ?>
      </div>
      <div class="col l4 hide-on-med-and-down">
        <?= implode("", $trisected[0]) ?>
      </div>
      <div class="col l4 hide-on-med-and-down">
        <?= implode("", $trisected[1]) ?>
      </div>
      <div class="col l4 hide-on-med-and-down">
        <?= implode("", $trisected[2]) ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php
require_once Values::FOOTER_INC;
