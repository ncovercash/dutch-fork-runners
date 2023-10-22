<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2014 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2014 Silver Fox Trail Run");
?>
    <h4 class="header center">Results</h4>

    <div class="divider"></div>

    <object data="results_2014.pdf" type="application/pdf" width="100%" height="800px">
      <p>If not showing, go to direct <a href="results_2014.pdf">results</a></p>
    </object>
<?php
require_once Values::FOOTER_INC;
