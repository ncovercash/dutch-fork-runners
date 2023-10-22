<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "calendar");
define("PAGE_TITLE", "Calendar");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Calendar");

?>
<div class="section center">
  <a href="https://calendar.google.com/calendar/render?cid=lex5.k12.sc.us_87ev80jebat3bij59q4mi22t24@group.calendar.google.com"
    class="col s12 m5 btn white-text small-margin">Add to Google Calendar</a>
  <a href="https://calendar.google.com/calendar/ical/lex5.k12.sc.us_87ev80jebat3bij59q4mi22t24@group.calendar.google.com/public/basic.ics"
    class="col s12 m5 btn white-text small-margin">Add to Calendar</a>
</div>

<div class="divider"></div>

<div class="raw-markdown">
  <?= htmlspecialchars(file_get_contents(REAL_ROOTDIR . "md/calendar.md")) ?>
</div>

<div class="divider"></div>

<div class="section">
  <div id="calendar"></div>
</div>


<div id="eventModal" class="modal">
  <div class="modal-content">
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close btn-flat">OK</a>
  </div>
</div>
<?php
require_once Values::FOOTER_INC;
