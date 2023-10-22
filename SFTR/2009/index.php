<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2009 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2009 Silver Fox Trail Run");
?>
<div class="section">
  <h4 class="header center">Results</h4>

  <object data="results_2009.txt" type="text/plain" width="100%" height="800px">
    <p>If not shown, go to <a href="results_2009.text">the results directly</a></p>
  </object>
</div>
<?php
require_once Values::FOOTER_INC;
