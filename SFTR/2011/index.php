<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2011 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2011 Silver Fox Trail Run");
?>
<h4>Silver Level:</h4>

<p class="flow-text">Columbia SC Marathon</p>

<div class="divider"></div>

<h4>Green Level:</h4>

<p class="flow-text">The Basinger Family</p>
<p class="flow-text">The Jaynes Family</p>
<p class="flow-text">The Lindler Family</p>
<p class="flow-text">Councilman Johnny Jeffcoat</p>
<p class="flow-text">Dusty Rhodes -- Jostens</p>
<p class="flow-text">A Goodnight Sleepstore</p>
<p class="flow-text">Moore Sports Clinic</p>
<p class="flow-text">Lexington County Republican Party</p>
<p class="flow-text">Dr. Patrick Daley Family Dentistry</p>

<div class="divider"></div>

<h4>White Level:</h4>

<p class="flow-text">Intramed Plus </p>
<p class="flow-text">The Fant Family </p>
<p class="flow-text">Drs. Nyland and Collins, Pediatric Dentistry</p>
<p class="flow-text">O'Leary Orthodontics</p>
<p class="flow-text">Representative Chip Huggins</p>
<p class="flow-text">Representative Nathan Ballentine</p>
<p class="flow-text">Senator Ronnie Cromer</p>
<p class="flow-text">Sheriff Jimmy Metts</p>
<p class="flow-text">Dr. Thomas Major - Family Dentistry</p>
<p class="flow-text">Charter Ride Tours</p>
<p class="flow-text">The Uppercut, Inc.</p>
<p class="flow-text">Mark Zion, Zion & Company</p>
<p class="flow-text">United Way of SC</p>

<div class="divider"></div>

<h4>In-kind donations:</h4>

<p class="flow-text">Fleet Feet Sports, Columbia</p>
<p class="flow-text">David Tompkins @ the State Farmers Market</p>
<p class="flow-text">Bruegger's Bagel Bakery, Lake Murray Blvd</p>

<div class="divider"></div>

<h4 class="header center">Results</h4>

<div class="divider"></div>

<object data="results_2011.pdf" type="application/pdf" width="100%" height="800px">
  <p class="flow-text">If not showing, go to direct <a href="results_2011.pdf">results</a></p>
</object>
</div>
<?php
require_once Values::FOOTER_INC;
