<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Markdown;
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "misc");
define("PAGE_TITLE", "Misc Info");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Miscellaneous");
?>
<div class="section">
	<?= Markdown::convert(file_get_contents(REAL_ROOTDIR . "md/misc.md")) ?>
</div>
<?php
require_once Values::FOOTER_INC;
