<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Silver Fox Trail Run");
?>
<div class="section">
  <h4 class="header">Previous races:</h4>

  <ul class="browser-default">
    <li class="flow-text no-margin"><a href="2015">2015</a></li>
    <li class="flow-text no-margin"><a href="2014">2014</a></li>
    <li class="flow-text no-margin"><a href="2013">2013</a></li>
    <li class="flow-text no-margin"><a href="2012">2012</a></li>
    <li class="flow-text no-margin"><a href="2011">2011</a></li>
    <li class="flow-text no-margin"><a href="2010">2010</a></li>
    <li class="flow-text no-margin"><a href="2009">2009</a></li>
  </ul>
</div>
<?php
require_once Values::FOOTER_INC;
