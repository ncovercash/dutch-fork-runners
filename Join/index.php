<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Markdown;
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "join");
define("PAGE_TITLE", "Join our Team");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Join our Team");
?>
<?= Markdown::convert(file_get_contents(REAL_ROOTDIR . "md/join.md")) ?>
<?php
require_once Values::FOOTER_INC;
