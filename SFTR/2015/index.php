<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2015 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2015 Silver Fox Trail Run");

$tableHeaders = ["Place", "Bib#", "Name", "Time", "Age", "Gender"];
$tableData = [
  ["1", "967", "Ryan Plexico", "0:19:35", "31", "M",],
  ["2", "938", "Alex Chalgren", "0:20:22", "18", "M",],
  ["3", "911", "Zachary Freeman", "0:20:54", "15", "M",],
  ["4", "937", "Jackson Jordan", "0:21:10", "16", "M",],
  ["5", "953", "Philip Cuppernell", "0:21:14", "34", "M",],
  ["6", "916", "Chris Davis", "0:21:24", "19", "M",],
  ["7", "929", "Ammar Dossaji", "0:21:28", "15", "M",],
  ["8", "902", "Coleman Devaney", "0:21:30", "14", "M",],
  ["9", "965", "Bob Daley", "0:22:20", "49", "M",],
  ["10", "910", "Andrew Thumpston", "0:22:24", "14", "M",],
  ["11", "930", "Traice Greene", "0:22:25", "16", "M",],
  ["12", "898", "Brianna Hartley", "0:22:32", "14", "F",],
  ["13", "896", "Anna Jenkins", "0:22:41", "14", "F",],
  ["14", "914", "Michael Perry", "0:22:45", "12", "M",],
  ["15", "925", "Evan Fish", "0:22:52", "15", "M",],
  ["16", "924", "Adam Bernthal", "0:22:53", "13", "M",],
  ["17", "939", "Michael Nance", "0:23:08", "38", "M",],
  ["18", "920", "Ben Eubanks", "0:23:18", "15", "M",],
  ["19", "964", "Alex McDonald", "0:23:39", "40", "M",],
  ["20", "893", "Austin Weitz", "0:23:59", "17", "M",],
  ["21", "913", "Mia Perry", "0:24:00", "14", "F",],
  ["22", "907", "Hope Steger", "0:24:26", "16", "F",],
  ["23", "906", "Sara Steger", "0:24:32", "16", "F",],
  ["24", "959", "Revon Landreneau", "0:24:48", "15", "M",],
  ["25", "892", "Morgan Johnson", "0:24:49", "14", "F",],
  ["26", "889", "Hayden Stansbury", "0:25:08", "15", "M",],
  ["27", "984", "Brogan Brown", "0:25:17", "16", "F",],
  ["28", "909", "John Davis", "0:25:18", "13", "M",],
  ["29", "905", "Hannah Macon", "0:25:19", "17", "F",],
  ["30", "943", "Paige Trent", "0:25:22", "14", "F",],
  ["31", "891", "mandy kirkley", "0:25:37", "14", "F",],
  ["32", "926", "ian fish", "0:25:39", "40", "M",],
  ["33", "923", "Tonya Denys", "0:25:42", "14", "F",],
  ["34", "901", "Lauren Devaney", "0:25:48", "11", "F",],
  ["35", "908", "Kurt Steger", "0:26:00", "47", "M",],
  ["36", "888", "Leanna Mentes", "0:26:28", "17", "F",],
  ["37", "897", "Rich Timmons", "0:26:38", "33", "M",],
  ["38", "918", "Avery Blevins", "0:26:43", "13", "M",],
  ["39", "903", "Banks Fryer", "0:27:17", "14", "M",],
  ["40", "922", "Brenda Denys", "0:27:24", "17", "F",],
  ["41", "904", "Benjamin Fryer", "0:27:41", "18", "M",],
  ["42", "899", "Mackensie Barbee", "0:27:49", "16", "F",],
  ["43", "957", "Diillon Hite", "0:27:58", "14", "M",],
  ["44", "934", "Margaret Toole", "0:28:40", "15", "F",],
  ["45", "931", "Peyton Campbell", "0:28:44", "15", "F",],
  ["46", "890", "Michael Stansbury", "0:29:19", "44", "M",],
  ["47", "948", "Arnold Floyd", "0:29:51", "73", "M",],
  ["48", "927", "Stephanie Mason", "0:29:55", "14", "F",],
  ["49", "960", "Thomas Beattie", "0:31:24", "53", "M",],
  ["50", "952", "Brie McGrievy", "0:31:29", "40", "F",],
  ["51", "933", "Mary Toole", "0:31:32", "14", "F",],
  ["52", "887", "Jacqueline Mentes", "0:31:33", "14", "F",],
  ["53", "917", "Annie Blevins", "0:31:51", "15", "F",],
  ["54", "961", "Thomas Mentes", "0:31:53", "45", "M",],
  ["55", "912", "Anna Freeman", "0:31:56", "14", "F",],
  ["56", "944", "Dorothy Trent", "0:32:02", "11", "F",],
  ["57", "966", "Mario Tudor", "0:32:11", "39", "M",],
  ["58", "947", "KAY ORNELAS", "0:32:15", "52", "F",],
  ["59", "954", "Romy Cuppernell", "0:32:20", "30", "F",],
  ["60", "949", "John Davis", "0:32:25", "49", "M",],
  ["61", "932", "Nicole Williams", "0:32:33", "42", "F",],
  ["62", "962", "Henry Holt", "0:33:06", "79", "M",],
  ["63", "955", "Sarah Lowery", "0:33:59", "30", "F",],
  ["64", "921", "erica nelson", "0:34:20", "41", "F",],
  ["65", "886", "Stephanie Dukes", "0:34:43", "42", "F",],
  ["66", "950", "Gene Crawford", "0:35:07", "41", "M",],
  ["67", "895", "Pete Poore", "0:36:18", "63", "M",],
  ["68", "900", "Stephanie Langston", "0:36:22", "37", "F",],
  ["69", "946", "Harry Strick", "0:36:28", "61", "M",],
  ["70", "951", "Breck Bowen", "0:40:44", "41", "M",],
  ["71", "915", "Jennifer Tudor", "0:41:15", "43", "F",],
  ["72", "919", "Sadie Lorick", "0:43:47", "11", "F",],
  ["73", "940", "Kelley Blocker", "0:43:52", "49", "M",],
  ["74", "941", "Brigitte Smith", "0:44:54", "66", "F",],
  ["75", "963", "Rocky Soderberg", "0:47:54", "73", "M",],
  ["76", "958", "Marcy Hite", "0:48:10", "42", "F",],
  ["77", "885", "Dina Mauldin", "0:54:19", "44", "F",],
  ["78", "956", "Norene Lowery", "1:15:55", "66", "F",],
];
?>
    <h4 class="header center">Results</h4>

    <div class="divider"></div>

    <table class="responsive-table highlight bordered">
        <thead>
          <tr>
            <?php foreach ($tableHeaders as $header): ?>
                  <th><?= htmlspecialchars($header) ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
      <tbody>
        <?php foreach ($tableData as $row): ?>
              <tr>
                <?php foreach ($row as $cell): ?>
                      <td><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
              </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

<?php
require_once Values::FOOTER_INC;
