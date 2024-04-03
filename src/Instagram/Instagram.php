<?php

namespace DutchForkRunners\Instagram;

use \PDO;

class Instagram {
  public static function getPosts() {

    $db = new PDO("sqlite:" . REAL_ROOTDIR . "ig/ig.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db->query("SELECT id, permalink, is_video, caption, files, created_at FROM posts")->fetchAll(PDO::FETCH_ASSOC);
  }
}
