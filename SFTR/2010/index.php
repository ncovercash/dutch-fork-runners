<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2010 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2010 Silver Fox Trail Run");

$tableHeaders = ["Place", "Bib#", "Name", "Ag", "S", "City", "St", "Time", "Pace"];
$tableData = [
  ["1", "45", "Roland Hakes", "17", "M", "Irmo", "SC", "18:13.5", "05:52.7"],
  ["2", "120", "Joe Tomlin", "26", "M", "Columbia", "SC", "18:35.0", "05:59.7"],
  ["3", "94", "Jesse Richards", "17", "M", "Irmo", "SC", "20:04.1", "06:28.4"],
  ["4", "140", "Joseph Klasnic", "14", "M", "Columbia", "SC", "20:14.2", "06:31.7"],
  ["5", "144", "Pranv Patel", "18", "M", "columbia", "SC", "20:18.9", "06:33.2"],
  ["6", "7", "Michael Bradley", "14", "M", "Irmo", "SC", "20:20.0", "06:33.5"],
  ["7", "106", "Michael Sherman", "16", "M", "Irmo", "SC", "20:26.2", "06:35.5"],
  ["8", "59", "Samantha Hughes", "18", "F", "Irmo", "SC", "20:28.4", "06:36.3"],
  ["9", "23", "Jason Dimery", "28", "M", "Lexington", "SC", "20:37.0", "06:39.0"],
  ["10", "79", "Michael Metz", "16", "M", "Irmo", "SC", "20:43.1", "06:41.0"],
  ["11", "137", "Alex McDonald", "35", "M", "Columbia", "SC", "21:33.0", "06:57.1"],
  ["12", "24", "Damien Driggers", "16", "M", "Irmo", "SC", "21:36.6", "06:58.3"],
  ["13", "78", "Tracy McKinnon", "36", "M", "Irmo", "SC", "21:41.7", "06:59.9"],
  ["14", "151", "Megan Weis", "33", "F", "Columbia", "SC", "21:49.1", "07:02.3"],
  ["15", "91", "Allan Reinhard", "16", "M", "Columbia", "SC", "21:59.3", "07:05.6"],
  ["16", "10", "Darrell Brown", "34", "M", "Columbia", "SC", "22:00.2", "07:05.9"],
  ["17", "125", "Davis Tuggle", "16", "M", "Irmo", "SC", "22:11.7", "07:09.6"],
  ["18", "82", "Sam Noblet", "16", "M", "Columbia", "SC", "22:18.0", "07:11.6"],
  ["19", "131", "Brandon Williams", "27", "M", "Lexington", "SC", "22:29.9", "07:15.5"],
  ["20", "65", "Nathan Jones", "15", "M", "Columbia", "SC", "22:39.9", "07:18.7"],
  ["21", "160", "Don Bickel", "44", "M", "", "VA", "22:46.7", "07:20.9"],
  ["22", "86", "Toby Porter", "34", "M", "West Columbia", "SC", "22:53.7", "07:23.1"],
  ["23", "73", "Amy McDonaugh", "33", "F", "Irmo", "SC", "23:11.9", "07:29.0"],
  ["24", "74", "Tyler McGaha", "34", "M", "Columbia", "SC", "23:22.0", "07:32.3"],
  ["25", "70", "Andrey Kucherin", "38", "M", "Columbia", "SC", "23:55.8", "07:43.1"],
  ["26", "68", "Tyler Kirk", "16", "M", "Irmo", "SC", "24:00.2", "07:44.6"],
  ["27", "115", "Tom Syfert", "48", "M", "Irmo", "SC", "24:03.6", "07:45.7"],
  ["28", "75", "Jackson McGregor", "14", "M", "Irmo", "SC", "24:05.1", "07:46.2"],
  ["29", "114", "Amelia Syfert", "15", "F", "Irmo", "SC", "24:10.8", "07:48.0"],
  ["30", "42", "Teo Gamishev", "51", "M", "Columbia", "SC", "24:16.2", "07:49.7"],
  ["31", "9", "RJ Breen", "44", "M", "Greenville", "SC", "24:25.7", "07:52.8"],
  ["32", "97", "William Schmitz", "38", "M", "Lexington", "SC", "24:27.9", "07:53.5"],
  ["33", "111", "Laura Stepp", "44", "F", "Aiken", "SC", "24:30.4", "07:54.3"],
  ["34", "14", "Naomi Chiorazzi", "33", "F", "West Columbia", "SC", "24:35.8", "07:56.1"],
  ["35", "158", "Kenneth Bickel", "51", "M", "Lexington", "SC", "24:45.6", "07:59.2"],
  ["36", "25", "John Drummond", "15", "M", "Columbia", "SC", "24:56.3", "08:02.7"],
  ["37", "163", "Luke Fant", "16", "M", "Columbia", "SC", "25:03.0", "08:04.9"],
  ["38", "5", "Sarah Blackwell", "34", "F", "Columbia", "SC", "25:08.8", "08:06.7"],
  ["39", "76", "Bryce McKinnon", "16", "M", "Irmo", "SC", "25:27.5", "08:12.8"],
  ["40", "162", "Gregg Morton", "43", "M", "Columbia", "SC", "25:33.4", "08:14.6"],
  ["41", "139", "Taylor Quindlen", "15", "F", "Irmo", "SC", "25:36.9", "08:15.8"],
  ["42", "15", "Daniel Cleary", "15", "M", "Irmo", "SC", "25:38.5", "08:16.3"],
  ["43", "95", "Haley Saxby", "15", "F", "Columbia", "SC", "25:40.4", "08:16.9"],
  ["44", "26", "Mason Drummond", "15", "M", "Columbia", "SC", "25:47.8", "08:19.3"],
  ["45", "11", "Monica Brumagin", "44", "F", "Irmo", "SC", "26:02.3", "08:24.0"],
  ["46", "3", "Eric Barfield", "43", "M", "Blythewood", "SC", "26:02.9", "08:24.2"],
  ["47", "148", "Anna Caroline Capps", "12", "F", "Lexington", "SC", "26:11.9", "08:27.1"],
  ["48", "32", "Ryan Ewing", "26", "M", "Columbia", "SC", "26:22.2", "08:30.4"],
  ["49", "21", "Chris Davis", "14", "M", "Irmo", "SC", "26:27.3", "08:32.0"],
  ["50", "96", "Kristin Schmitz", "29", "F", "Lexington", "SC", "26:28.8", "08:32.5"],
  ["51", "51", "Mark Harmon", "40", "M", "Columbia", "SC", "26:34.6", "08:34.4"],
  ["52", "31", "Emily Ewing", "28", "F", "Columbia", "SC", "26:40.5", "08:36.3"],
  ["53", "110", "Kyle Spirek", "17", "F", "Columbia", "SC", "26:40.8", "08:36.4"],
  ["54", "52", "Brianna Hartley", "9", "F", "Irmo", "SC", "26:48.1", "08:38.8"],
  ["55", "41", "Amanda Gaffrey", "33", "F", "Cayce", "SC", "26:48.8", "08:39.0"],
  ["56", "101", "Jim Selbee", "46", "M", "Columbia", "SC", "27:04.5", "08:44.0"],
  ["57", "100", "Hayes Selbee", "12", "M", "Columbia", "SC", "27:16.4", "08:47.9"],
  ["58", "53", "Tara Heddy", "39", "F", "West Columbia", "SC", "27:16.7", "08:48.0"],
  ["59", "33", "Taylor Fallaw", "16", "M", "Irmo", "SC", "27:25.8", "08:50.9"],
  ["60", "142", "Michael Naso", "12", "M", "Irmo", "SC", "27:29.2", "08:52.0"],
  ["61", "83", "Andy Ogburn", "45", "M", "Columbia", "SC", "27:42.6", "08:56.3"],
  ["62", "89", "Aly Randall", "16", "F", "Irmo", "SC", "27:47.9", "08:58.0"],
  ["63", "156", "Chris Rick", "15", "M", "Irmo", "SC", "28:00.6", "09:02.1"],
  ["64", "149", "William Roberts III", "25", "M", "Columbia", "SC", "28:06.8", "09:04.1"],
  ["65", "150", "Henry Holt", "74", "M", "Lexington", "SC", "28:09.8", "09:05.1"],
  ["66", "66", "Charles L Julg", "31", "M", "Columbia", "SC", "28:11.9", "09:05.8"],
  ["67", "2", "Daniel Barfield", "13", "M", "Blythewood", "SC", "28:12.5", "09:06.0"],
  ["68", "153", "Alex Ponjomarev", "61", "M", "Columbia", "SC", "28:34.7", "09:13.1"],
  ["69", "159", "Elizabeth Chapman", "22", "F", "", "VA", "28:35.4", "09:13.4"],
  ["70", "20", "Mike Compton", "57", "M", "Columbia", "SC", "28:49.9", "09:18.0"],
  ["71", "56", "Jonathan Hopkins", "39", "M", "Chapin", "SC", "28:53.6", "09:19.2"],
  ["72", "147", "Brandon Capps", "15", "M", "Lexington", "SC", "28:54.8", "09:19.6"],
  ["73", "107", "Rocky Soderberg", "68", "M", "Sumter", "SC", "28:55.9", "09:20.0"],
  ["74", "67", "Kelly Kircher", "14", "M", "Irmo", "SC", "29:07.9", "09:23.8"],
  ["75", "87", "Sue Porter", "54", "F", "Columbia", "SC", "29:11.6", "09:25.0"],
  ["76", "77", "Julie McKinnon", "35", "F", "Irmo", "SC", "29:17.9", "09:27.1"],
  ["77", "121", "Ian Toogood", "33", "M", "Elgin", "SC", "29:24.0", "09:29.0"],
  ["78", "136", "Steve Ostrovsky", "39", "M", "Monetta", "SC", "29:24.4", "09:29.1"],
  ["79", "92", "Bekah Reinhard", "11", "F", "Columbia", "SC", "29:37.8", "09:33.5"],
  ["80", "17", "Bobbie Cleary", "52", "F", "Irmo", "SC", "29:43.5", "09:35.3"],
  ["81", "141", "Kaitlyn Case", "17", "F", "Columbia", "SC", "29:48.6", "09:37.0"],
  ["82", "49", "Graham Harmon", "12", "M", "Columbia", "SC", "30:10.4", "09:44.0"],
  ["83", "40", "Brianna Gaddis", "16", "F", "Irmo", "SC", "30:32.4", "09:51.1"],
  ["84", "155", "Jennifer Quadri", "32", "F", "Phoenix", "AZ", "30:49.9", "09:56.7"],
  ["85", "126", "Steven Vanco", "40", "M", "Blythewood", "SC", "30:58.8", "09:59.6"],
  ["86", "104", "Bryce Shealy", "13", "M", "Irmo", "SC", "31:09.5", "10:03.1"],
  ["87", "50", "Ethan Harmon", "14", "M", "Columbia", "SC", "32:07.6", "10:21.8"],
  ["88", "30", "Michael Evans", "40", "M", "Sumter", "SC", "32:32.7", "10:29.9"],
  ["89", "108", "Morgan Sox", "14", "F", "Irmo", "SC", "32:43.0", "10:33.2"],
  ["90", "8", "Kelly Bradley", "47", "F", "Irmo", "SC", "32:47.9", "10:34.8"],
  ["91", "93", "Ran Reinhard", "46", "M", "Columbia", "SC", "32:48.9", "10:35.1"],
  ["92", "27", "Dave Duffy", "45", "M", "Irmo", "SC", "32:56.6", "10:37.6"],
  ["93", "116", "Darcy Templeton", "36", "F", "West Columbia", "SC", "33:03.2", "10:39.7"],
  ["94", "117", "Sam Templeton", "38", "M", "West Columbia", "SC", "33:08.5", "10:41.5"],
  ["95", "157", "Charles A Julg Jr", "56", "M", "Salem", "VA", "33:08.7", "10:41.5"],
  ["96", "103", "Susanna Sharpe", "25", "F", "Blythewood", "SC", "33:17.7", "10:44.4"],
  ["97", "138", "Chip Hicks", "38", "M", "Columbia", "SC", "33:27.4", "10:47.6"],
  ["98", "88", "Ken Prosser", "46", "M", "Columbia", "SC", "33:42.0", "10:52.3"],
  ["99", "60", "Cynthia Hughes", "43", "F", "Irmo", "SC", "33:53.0", "10:55.8"],
  ["100", "4", "Paul Bates", "55", "M", "Lexington", "SC", "34:00.8", "10:58.3"],
  ["101", "154", "Danyel Thompson", "37", "F", "Richton Park", "IL", "34:21.4", "11:05.0"],
  ["102", "12", "Chavous Camp", "30", "M", "Irmo", "SC", "34:41.9", "11:11.6"],
  ["103", "134", "Jessica Ulrey", "35", "F", "Leslie", "MI", "34:42.5", "11:11.8"],
  ["104", "132", "Melodee Woodmansee", "45", "F", "Lexington", "SC", "34:45.3", "11:12.7"],
  ["105", "161", "Wendall Cribb", "68", "M", "Columbia", "SC", "35:05.1", "11:19.1"],
  ["106", "28", "Leslie Duffy", "40", "F", "Irmo", "SC", "35:21.3", "11:24.3"],
  ["107", "105", "Bailey Shealy", "15", "F", "Irmo", "SC", "35:21.7", "11:24.4"],
  ["108", "6", "Sharon Blakeney", "40", "F", "Lugoff", "SC", "35:22.5", "11:24.7"],
  ["109", "122", "Caleb Trent", "12", "M", "Columbia", "SC", "35:50.7", "11:33.8"],
  ["110", "124", "Peggy Trent", "43", "F", "Columbia", "SC", "35:59.9", "11:36.7"],
  ["111", "123", "Paige Trent", "9", "F", "Columbia", "SC", "36:01.3", "11:37.2"],
  ["112", "18", "Patrick Cobb", "46", "M", "Columbia", "SC", "36:46.4", "11:51.7"],
  ["113", "29", "Wendy Easter", "35", "F", "Elgin", "SC", "37:10.6", "11:59.6"],
  ["114", "38", "Cheryl Felder", "39", "F", "Lexington", "SC", "37:27.6", "12:05.0"],
  ["115", "84", "Mary Pelkey", "57", "F", "Lexington", "SC", "37:28.0", "12:05.2"],
  ["116", "133", "Kristy Woodmansee", "23", "F", "Lexington", "SC", "37:36.8", "12:08.0"],
  ["117", "46", "Paul Haley", "31", "M", "La Jolla", "CA", "37:38.8", "12:08.6"],
  ["118", "43", "Allison Gorman", "33", "F", "Columbia", "SC", "38:06.1", "12:17.5"],
  ["119", "44", "Patrick Gorman", "32", "M", "Columbia", "SC", "38:06.6", "12:17.6"],
  ["120", "80", "Jay Moras", "39", "M", "Columbia", "SC", "38:25.6", "12:23.7"],
  ["121", "72", "Mariah McDonaugh", "12", "F", "Irmo", "SC", "38:36.6", "12:27.3"],
  ["122", "102", "Valerie Selby", "56", "F", "Irmo", "SC", "38:38.1", "12:27.8"],
  ["123", "34", "Aidan Fallaw", "13", "F", "Irmo", "SC", "39:12.8", "12:39.0"],
  ["124", "165", "Brigitte Smith", "60", "F", "Aiken", "SC", "39:18.5", "12:40.8"],
  ["125", "85", "Pete Poore", "58", "M", "Columbia", "SC", "39:26.5", "12:43.4"],
  ["126", "55", "Donald Holloman", "41", "M", "Irmo", "SC", "39:58.5", "12:53.7"],
  ["127", "143", "Alexandra Schwab", "15", "F", "Lexington", "SC", "40:34.9", "13:05.5"],
  ["128", "16", "Rebekah Cleary", "11", "F", "Irmo", "SC", "40:36.1", "13:05.8"],
  ["129", "1", "Nikki Baker", "38", "F", "Columbia", "SC", "40:39.1", "13:06.8"],
  ["130", "129", "Melissa Wenger", "22", "F", "Cayce", "SC", "42:58.1", "13:51.7"],
  ["131", "39", "Daniel Frick", "73", "M", "Chapin", "SC", "42:58.4", "13:51.8"],
  ["132", "130", "Brandon Wiggins", "25", "M", "Elgin", "SC", "43:25.2", "14:00.4"],
  ["133", "164", "Mary Harley Fant", "17", "F", "Colunbia", "SC", "43:25.6", "14:00.5"],
  ["134", "13", "Julia Hopkins", "10", "F", "Lexington", "SC", "48:16.5", "15:34.4"],
  ["135", "57", "Stacy Hopkins", "35", "F", "Chapin", "SC", "48:17.0", "15:34.5"],
  ["136", "19", "William Cody", "66", "M", "Lexington", "SC", "48:59.7", "15:48.3"],
  ["137", "81", "Veronica Moras", "35", "F", "Columbia", "SC", "51:53.9", "16:44.5"],
  ["138", "146", "Robin Nalepa", "40", "F", "Irmo", "SC", "52:30.1", "16:56.1"],
  ["139", "47", "Helen Hardesty", "17", "F", "Columbia", "SC", "56:18.5", "18:09.8"],
  ["140", "48", "Kristina Hardesty", "54", "F", "Columbia", "SC", "56:18.9", "18:10.0"],
  ["141", "54", "Patricia Hile", "53", "F", "Columbia", "SC", "58:21.7", "18:49.6"],
  ["142", "58", "Tina Houser", "43", "F", "Lexington", "SC", "58:22.0", "18:49.7"],
];
?>
<h4 class="header center">Results</h4>

<div class="divider"></div>

<table class="responsive-table highlight bordered">
  <thead>
    <tr>
      <?php foreach ($tableHeaders as $header): ?>
        <th>
          <?= htmlspecialchars($header) ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tableData as $row): ?>
      <tr>
        <?php foreach ($row as $cell): ?>
          <td>
            <?= htmlspecialchars($cell) ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php
require_once Values::FOOTER_INC;
