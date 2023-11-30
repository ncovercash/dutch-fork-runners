<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Markdown;
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "handbook");
define("PAGE_TITLE", "Handbook");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Handbook");
?>
<?= Markdown::convert(file_get_contents(REAL_ROOTDIR . "md/handbook.md")) ?>
<?php
require_once Values::FOOTER_INC;
