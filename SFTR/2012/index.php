<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2012 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2012 Silver Fox Trail Run");
?>
<div class="section">
  <h4 class="header center">Sponsors</h4>

  <div class="row">
    <h3>Silver Level:</h3>
    <div align="center" class="col m4 s12">
      <a href="http://columbiaymca.org/locations/northwest-family-ymca/"><img class="col s12" src="YMCA.png">YMCA
        NorthWest Family Center</a>
    </div>
  </div>
  <div class="row">
    <h3>Green Level:</h3>
    <div align="center" class="col m2 s6">
      <a href="http://tropicalsmoothie.com"><img class="col s12" src="tsmoothie.png">Tropical Smoothie</a>
    </div>
    <div align="center" class="col m2 s6">
      <img class="col s12" src="bspj.png">Dusty Rhodes - <a href="http://jostens.com">Jostens</a> - <a
        href="http://www.blacksheeppromotions.com/">Black Sheep Promotions</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="#"><img class="col s12" src="jeffcoat.png">Coroner Harman & Councilman Jeffcoat</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="javascript:alert('👌👌👌');"><img class="col s12" src="lindler.png">The Lindler Family</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="http://richlandgop.com"><img class="col s12" src="richgop.png">First Tuesday Republican Club of
        Richland/Lexington Counties</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="http://lexingtongop.com"><img class="col s12" src="lexgop.png">Lexington County Republican Party</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="http://aimfitnessnetwork.com"><img class="col s12" src="aim.png">AIM Fitness & Nutrition</a>
    </div>
    <div align="center" class="col m2 s6">
      <img class="col s12" src="dfrw.png">Dutch Fork Republican Women
    </div>
    <div align="center" class="col m2 s6">
      <a href="http://brunerpowell.com"><img class="col s12" src="bp.png">Bruner Powell Wall & Mullins, LLC</a>
    </div>
    <div align="center" class="col m2 s6">
      <a href="http://runhardcolumbiamarathon.com/"><img class="col s12" src="colamarathon.png">Columbia SC Marathon</a>
    </div>
  </div>
  <div class="row">
    <h3>White Level:</h3>
    <p class="flow-text">Drs. Alexis Collins & Jim Nyland, Children's Dentistry</p>
    <p class="flow-text">O'Leary Orthodontics</p>
    <p class="flow-text">The Upper Cut, Inc.</p>
    <p class="flow-text">The Naso Family</p>
    <p class="flow-text">The Steger Family</p>
    <p class="flow-text">Dr. Thomas Major - Family Dentistry</p>
    <p class="flow-text">Representative Chip Huggins</p>
  </div>
  <div class="row">
    <h3>In-kind Donations:</h3>
    <p class="flow-text">Fleet Feet Sports, Columbia</p>
    <p class="flow-text">RoadID</p>
    <p class="flow-text">David Tompkins - State Farmers Market</p>
  </div>
  <hr>
</div>
<h4 class="header center">Results</h4>
<ul class="collapsible popout" data-collapsible="expandable">
  <li>
    <div class="collapsible-header">Overall</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "109", "Chris Stafford", "17", "M", "Irmo", "SC", "17:52.0", "05:45.8",], ["2", "160", "Ryan Plexico", "28", "M", "Columbia", "SC", "18:35.0", "05:59.7",], ["3", "35", "Avery Dominick", "13", "M", "Irmo", "SC", "19:22.0", "06:14.8",], ["4", "65", "Nathan Jones", "17", "M", "Columbia", "SC", "19:42.0", "06:21.3",], ["5", "111", "Tim Stafford", "16", "M", "Irmo", "SC", "19:49.0", "06:23.5",], ["6", "12", "James Bowen", "15", "M", "Irmo", "SC", "20:00.0", "06:27.1",], ["7", "17", "Michael Bradley", "16", "M", "Irmo", "SC", "20:04.0", "06:28.4",], ["8", "68", "Joseph Klasnic", "16", "M", "columbia", "SC", "20:40.0", "06:40.0",], ["9", "117", "Caleb Trent", "14", "M", "Columbia", "SC", "20:48.0", "06:42.6",], ["10", "75", "Jackson McGregor", "16", "M", "Irmo", "SC", "21:01.0", "06:46.8",], ["11", "19", "Darrell Brown", "36", "M", "Columbia", "SC", "21:28.0", "06:55.5",], ["12", "29", "Chris Davis", "16", "M", "Irmo", "SC", "21:33.0", "06:57.1",], ["13", "128", "Hope Whisman", "14", "F", "Irmo", "SC", "21:40.0", "06:59.4",], ["14", "154", "Alex McDonald", "37", "M", "Columbia", "SC", "21:56.0", "07:04.5",], ["15", "96", "David Robles", "16", "M", "Columbia", "SC", "22:01.0", "07:06.1",], ["16", "87", "Toby Porter", "36", "M", "West Columbia", "SC", "22:32.0", "07:16.1",], ["17", "16", "Mark Bradley", "15", "M", "Irmo", "SC", "22:33.0", "07:16.5",], ["18", "66", "DJ Jordan", "17", "M", "Irmo", "SC", "22:41.0", "07:19.0",], ["19", "134", "Geary McAlister", "54", "M", "Rock Hill", "SC", "22:50.0", "07:21.9",], ["20", "8", "Anderson Blevins", "14", "M", "Lexington", "SC", "22:57.0", "07:24.2",], ["21", "110", "Rick Stafford", "45", "M", "Irmo", "SC", "22:58.0", "07:24.5",], ["22", "54", "Brianna Hartley", "11", "F", "Irmo", "SC", "23:09.0", "07:28.1",], ["23", "151", "Andrew Herbst", "14", "M", "Irmo", "SC", "23:18.0", "07:31.0",], ["24", "39", "Alec Elmore", "14", "M", "Chapin", "SC", "23:40.0", "07:38.1",], ["25", "97", "Hannah Robles", "20", "F", "Columbia", "SC", "23:44.0", "07:39.4",], ["26", "82", "Andrew Nienhuis", "16", "M", "Blythewood", "SC", "23:46.0", "07:40.0",], ["27", "100", "Haley Saxby", "17", "F", "Columbia", "SC", "23:53.0", "07:42.3",], ["28", "135", "William Schmitz", "40", "M", "Lexington", "SC", "24:07.0", "07:46.8",], ["29", "144", "Ted Hewitt", "43", "M", "Columbia", "SC", "24:08.0", "07:47.1",], ["30", "162", "Justin Tweito", "17", "M", "Irmo", "SC", "24:17.0", "07:50.0",], ["31", "15", "Joshua Boyd", "15", "M", "Irmo", "SC", "24:24.0", "07:52.3",], ["32", "148", "Matthew Wolf", "41", "M", "Lexington", "SC", "24:27.0", "07:53.2",], ["33", "63", "Anna Johnson", "15", "F", "Irmo", "SC", "24:27.1", "07:53.3",], ["34", "28", "Samuel Dalenburg", "15", "M", "Columbia", "SC", "24:28.0", "07:53.5",], ["35", "69", "Vadim Lorick", "16", "M", "Lexington", "SC", "24:29.0", "07:53.9",], ["36", "7", "Alex Blevins", "17", "M", "Lexington", "SC", "24:30.0", "07:54.2",], ["37", "123", "Ken Vowles", "37", "M", "Irmo", "SC", "24:31.0", "07:54.5",], ["38", "81", "Michael Naso", "14", "M", "Irmo", "SC", "25:03.0", "08:04.8",], ["39", "99", "Sarah Robles", "14", "F", "Columbia", "SC", "25:06.0", "08:05.8",], ["40", "114", "Amelia Syfert", "17", "F", "Irmo", "SC", "25:13.0", "08:08.1",], ["41", "103", "Bryce Shealy", "15", "M", "Irmo", "SC", "25:18.0", "08:09.7",], ["42", "147", "Travis Cowan", "48", "M", "Columbia", "SC", "25:20.0", "08:10.3",], ["43", "33", "Coleman Devaney", "11", "M", "Irmo", "SC", "25:29.0", "08:13.2",], ["44", "36", "Elliott Dominick", "45", "M", "Irmo", "SC", "25:44.0", "08:18.1",], ["45", "150", "Hannah Macon", "13", "F", "Columbia", "SC", "25:45.0", "08:18.4",], ["46", "131", "Morgan Sox", "16", "F", "Irmo", "SC", "25:46.0", "08:18.7",], ["47", "6", "Sarah Blackwell", "36", "F", "Columbia", "SC", "26:05.0", "08:24.8",], ["48", "113", "Sara Steger", "13", "F", "Irmo", "SC", "26:06.0", "08:25.2",], ["49", "142", "Amber Todd", "31", "F", "Columbia", "SC", "26:14.0", "08:27.7",], ["50", "56", "Matt Havens", "32", "M", "West Columbia", "SC", "26:20.0", "08:29.7",], ["51", "89", "Jason Powell", "41", "M", "Blythewood", "SC", "26:23.0", "08:30.6",], ["52", "51", "Jacob Gibson", "14", "M", "Irmo", "SC", "26:37.0", "08:35.2",], ["53", "5", "Daniel Barfield", "15", "M", "Blythewood", "SC", "26:41.0", "08:36.5",], ["54", "64", "David Johnson", "46", "M", "Irmo", "SC", "26:43.0", "08:37.1",], ["55", "112", "Hope Steger", "13", "F", "Irmo", "SC", "26:43.1", "08:37.1",], ["56", "92", "Bradley Randolph", "33", "M", "Columbia", "SC", "26:44.0", "08:37.4",], ["57", "52", "Parker Grizzle", "15", "M", "Irmo", "SC", "26:45.0", "08:37.7",], ["58", "127", "Austin Weitz", "14", "M", "Irmo", "SC", "26:45.1", "08:37.8",], ["59", "44", "Zachary Freeman", "12", "M", "Lexington", "SC", "26:49.0", "08:39.0",], ["60", "77", "Collin McKinnon", "15", "M", "Irmo", "SC", "26:58.0", "08:41.9",], ["61", "156", "Chris Traister", "21", "M", "Columbia", "SC", "27:06.0", "08:44.5",], ["62", "10", "Avery Blevins", "10", "M", "Lexington", "SC", "27:12.0", "08:46.5",], ["63", "70", "Mel Love", "48", "M", "Columbia", "SC", "27:21.0", "08:49.4",], ["64", "122", "Colleen Vowles", "39", "F", "Irmo", "SC", "27:27.0", "08:51.3",], ["65", "59", "Tracy Heldreth", "41", "F", "Lexington", "SC", "27:27.0", "08:51.3",], ["66", "119", "Paige Trent", "11", "F", "Columbia", "SC", "27:27.0", "08:51.3",], ["67", "132", "Darcy Bennett", "41", "M", "Summerville", "SC", "27:41.0", "08:55.8",], ["68", "24", "Richard Cook", "50", "M", "Cayce", "SC", "27:46.0", "08:57.4",], ["69", "146", "Olivia Grace Starnes", "11", "F", "Little Mountain", "SC", "27:50.0", "08:58.7",], ["70", "161", "Clint Burdett", "46", "M", "Irmo", "SC", "27:53.0", "08:59.7",], ["71", "42", "Lily Elmore", "12", "F", "Chapin", "SC", "27:54.0", "09:00.0",], ["72", "60", "James Hicks", "34", "M", "Jackson", "SC", "27:59.0", "09:01.6",], ["73", "91", "David Privette", "13", "M", "Columbia", "SC", "28:04.0", "09:03.2",], ["74", "130", "Amie Meyer", "33", "F", "Irmo", "SC", "28:08.0", "09:04.5",], ["75", "98", "Rachel Robles", "12", "F", "Columbia", "SC", "28:08.0", "09:04.5",], ["76", "155", "Daniel Robles", "7", "M", "Columbia", "SC", "28:10.0", "09:05.2",], ["77", "1", "Sydney Amodio", "15", "F", "Irmo", "SC", "28:20.0", "09:08.4",], ["78", "85", "Steve Ostrovsky", "41", "M", "Monetta", "SC", "28:26.0", "09:10.3",], ["79", "25", "James Corder", "44", "M", "Batesburg", "SC", "28:27.0", "09:10.6",], ["80", "78", "Julie McKinnon", "37", "F", "Irmo", "SC", "28:43.0", "09:15.8",], ["81", "143", "Kendall Jamison", "44", "M", "Stone Mountain", "GA", "28:44.0", "09:16.1",], ["82", "108", "Michael Smith", "17", "M", "Columbia", "SC", "28:49.0", "09:17.7",], ["83", "141", "Cal Senn", "12", "M", "Newberry", "SC", "29:21.0", "09:28.1",], ["84", "138", "Alex Hartley", "13", "M", "Irmo", "SC", "29:25.0", "09:29.4",], ["85", "139", "Bryce Harman", "25", "M", "Columbia", "SC", "29:50.0", "09:37.4",], ["86", "14", "Breanna Boyd", "14", "F", "Irmo", "SC", "29:50.0", "09:37.4",], ["87", "107", "Wayne Shuler", "44", "M", "Irmo", "SC", "29:50.0", "09:37.4",], ["88", "13", "Janet Bowen", "45", "F", "Irmo", "SC", "30:03.0", "09:41.6",], ["89", "137", "Rocky Soderberg", "70", "M", "Sumter", "SC", "30:06.0", "09:42.6",], ["90", "34", "James Dicker", "53", "M", "Lexington", "SC", "30:13.0", "09:44.8",], ["91", "157", "Henry Holt", "71", "M", "Lexington", "SC", "30:14.0", "09:45.2",], ["92", "2", "Jason Ashley", "28", "M", "Columbia", "SC", "30:36.0", "09:52.3",], ["93", "116", "Emily Thornhill", "17", "F", "Columbia", "SC", "30:50.0", "09:56.8",], ["94", "18", "Travis Brazell", "33", "M", "Irmo", "SC", "31:02.0", "10:00.6",], ["95", "158", "Trudy Key", "39", "F", "Pomaria", "SC", "31:03.0", "10:01.0",], ["96", "159", "Todd Davis", "43", "M", "Elgin", "SC", "31:25.0", "10:08.1",], ["97", "121", "Anthony Tucker", "44", "M", "Columbia", "SC", "31:35.0", "10:11.3",], ["98", "71", "Elizabeth Martin", "24", "F", "West Columbia", "SC", "31:36.0", "10:11.6",], ["99", "126", "Jade Warnock", "17", "F", "Irmo", "SC", "31:37.0", "10:11.9",], ["100", "80", "Karen Moreira", "30", "F", "Lexington", "SC", "31:42.0", "10:13.5",], ["101", "30", "Marie Charlotte Demetriades", "12", "F", "Irmo", "SC", "31:55.0", "10:17.7",], ["102", "46", "Benjamin Fryer", "15", "M", "Chapin", "SC", "32:02.0", "10:20.0",], ["103", "120", "Peggy Trent", "45", "F", "Columbia", "SC", "32:06.0", "10:21.3",], ["104", "152", "Taylor Sweeney", "16", "F", "Irmo", "SC", "32:14.0", "10:23.9",], ["105", "88", "Callie Powell", "16", "F", "Blythewood", "SC", "32:15.0", "10:24.2",], ["106", "43", "Kimberly Frawley", "38", "F", "Lexington", "SC", "32:38.0", "10:31.6",], ["107", "73", "Susan McGraw", "42", "F", "West Columbia", "SC", "32:40.0", "10:32.3",], ["108", "95", "Beth Robles", "46", "F", "Columbia", "SC", "32:49.0", "10:35.2",], ["109", "23", "Kevin Coogler", "32", "M", "Columbia", "SC", "32:51.0", "10:35.8",], ["110", "32", "Christy Derrick", "41", "F", "Irmo", "SC", "32:53.0", "10:36.5",], ["111", "124", "Tal Wanish", "16", "M", "Irmo", "SC", "32:53.0", "10:36.5",], ["112", "31", "Brenda Denys", "13", "F", "Irmo", "SC", "32:58.0", "10:38.1",], ["113", "9", "AnnaMarie Blevins", "12", "F", "Lexington", "SC", "33:08.0", "10:41.3",], ["114", "140", "Brad Harman", "54", "M", "Columbia", "SC", "33:12.0", "10:42.6",], ["115", "38", "Greg Duskin", "48", "M", "Irmo", "SC", "33:18.0", "10:44.5",], ["116", "58", "Tonya Hayes", "43", "F", "Irmo", "SC", "33:29.0", "10:48.1",], ["117", "118", "Carrie Elisabeth Trent", "20", "F", "Columbia", "SC", "33:50.0", "10:54.8",], ["118", "53", "Ann Hall", "51", "F", "chapin", "SC", "34:06.0", "11:00.0",], ["119", "125", "Allie Warnock", "15", "F", "Irmo", "SC", "34:08.0", "11:00.6",], ["120", "93", "Sandy Rickenbaker", "49", "F", "Irmo", "SC", "34:26.0", "11:06.5",], ["121", "153", "Tonya Denys", "10", "F", "Irmo", "SC", "34:33.0", "11:08.7",], ["122", "27", "William Cunningham", "37", "M", "Columbus", "GA", "34:43.0", "11:11.9",], ["123", "21", "Allee Cobb", "12", "F", "Columbia", "SC", "34:51.0", "11:14.5",], ["124", "83", "Maggie O'Toole", "12", "F", "Irmo", "SC", "34:51.0", "11:14.5",], ["125", "37", "Dave Duffy", "47", "M", "Irmo", "SC", "34:56.0", "11:16.1",], ["126", "55", "Carter Havens", "8", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["127", "57", "Ryan Havens", "37", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["128", "101", "Valerie Selby", "58", "F", "Irmo", "SC", "35:15.0", "11:22.3",], ["129", "47", "Michelle Fryer", "43", "F", "Chapin", "SC", "35:52.0", "11:34.2",], ["130", "145", "Jennifer Reeves", "44", "F", "Lugoff", "SC", "36:07.0", "11:39.0",], ["131", "136", "Pete Poore", "60", "M", "Columbia", "SC", "36:39.0", "11:49.4",], ["132", "11", "Brian Bowen", "45", "M", "Irmo", "SC", "36:57.0", "11:55.2",], ["133", "133", "Paul Bates", "57", "M", "Lexington", "SC", "37:01.0", "11:56.5",], ["134", "3", "Mackensie Barbee", "12", "F", "Columbia", "SC", "38:06.0", "12:17.4",], ["135", "4", "Mike Barbee", "41", "M", "Columbia", "SC", "38:16.0", "12:20.6",], ["136", "149", "Beth Macon", "15", "F", "Columbia", "SC", "39:02.0", "12:35.5",], ["137", "74", "Angela McGregor", "52", "F", "Irmo", "SC", "39:47.0", "12:50.0",], ["138", "129", "Cheryl Wirkus", "51", "F", "Racine", "WI", "39:49.0", "12:50.6",], ["139", "50", "Fred Gersdorff", "37", "M", "Chapin", "SC", "41:16.0", "13:18.7",], ["140", "84", "Kyra Ostrovsky", "14", "F", "Columbia", "SC", "41:24.0", "13:21.3",], ["141", "79", "Melody McNeil", "26", "F", "Aiken", "SC", "42:13.0", "13:37.1",], ["142", "45", "Banks Fryer", "11", "M", "Chapin", "SC", "42:14.0", "13:37.4",], ["143", "115", "Jackie Taylor", "26", "F", "Aiken", "SC", "44:14.0", "14:16.1",], ["144", "104", "Greg Shealy", "46", "M", "Irmo", "SC", "46:36.0", "15:01.9",], ["145", "72", "Alexis McGraw", "16", "F", "West Columbia", "SC", "48:37.0", "15:41.0",], ["146", "90", "Georgine Pozanc", "39", "F", "Chapin", "SC", "52:50.0", "17:02.6",], ["147", "22", "William Cody", "68", "M", "Lexington", "SC", "53:00.0", "17:05.8",], ["148", "106", "Susan Sherer", "56", "F", "Irmo", "SC", "58:56.0", "19:00.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Overall</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "109", "Chris Stafford", "17", "M", "Irmo", "SC", "17:52.0", "05:45.8",], ["2", "160", "Ryan Plexico", "28", "M", "Columbia", "SC", "18:35.0", "05:59.7",], ["3", "35", "Avery Dominick", "13", "M", "Irmo", "SC", "19:22.0", "06:14.8",], ["4", "65", "Nathan Jones", "17", "M", "Columbia", "SC", "19:42.0", "06:21.3",], ["5", "111", "Tim Stafford", "16", "M", "Irmo", "SC", "19:49.0", "06:23.5",], ["6", "12", "James Bowen", "15", "M", "Irmo", "SC", "20:00.0", "06:27.1",], ["7", "17", "Michael Bradley", "16", "M", "Irmo", "SC", "20:04.0", "06:28.4",], ["8", "68", "Joseph Klasnic", "16", "M", "columbia", "SC", "20:40.0", "06:40.0",], ["9", "117", "Caleb Trent", "14", "M", "Columbia", "SC", "20:48.0", "06:42.6",], ["10", "75", "Jackson McGregor", "16", "M", "Irmo", "SC", "21:01.0", "06:46.8",], ["11", "19", "Darrell Brown", "36", "M", "columbia", "SC", "21:28.0", "06:55.5",], ["12", "29", "Chris Davis", "16", "M", "Irmo", "SC", "21:33.0", "06:57.1",], ["13", "154", "Alex McDonald", "37", "M", "Columbia", "SC", "21:56.0", "07:04.5",], ["14", "96", "David Robles", "16", "M", "Columbia", "SC", "22:01.0", "07:06.1",], ["15", "87", "Toby Porter", "36", "M", "West Columbia", "SC", "22:32.0", "07:16.1",], ["16", "16", "Mark Bradley", "15", "M", "Irmo", "SC", "22:33.0", "07:16.5",], ["17", "66", "DJ Jordan", "17", "M", "Irmo", "SC", "22:41.0", "07:19.0",], ["18", "134", "Geary McAlister", "54", "M", "Rock Hill", "SC", "22:50.0", "07:21.9",], ["19", "8", "Anderson Blevins", "14", "M", "Lexington", "SC", "22:57.0", "07:24.2",], ["20", "110", "Rick Stafford", "45", "M", "Irmo", "SC", "22:58.0", "07:24.5",], ["21", "151", "Andrew Herbst", "14", "M", "Irmo", "SC", "23:18.0", "07:31.0",], ["22", "39", "Alec Elmore", "14", "M", "Chapin", "SC", "23:40.0", "07:38.1",], ["23", "82", "Andrew Nienhuis", "16", "M", "Blythewood", "SC", "23:46.0", "07:40.0",], ["24", "135", "William Schmitz", "40", "M", "Lexington", "SC", "24:07.0", "07:46.8",], ["25", "144", "Ted Hewitt", "43", "M", "Columbia", "SC", "24:08.0", "07:47.1",], ["26", "162", "Justin Tweito", "17", "M", "Irmo", "SC", "24:17.0", "07:50.0",], ["27", "15", "Joshua Boyd", "15", "M", "Irmo", "SC", "24:24.0", "07:52.3",], ["28", "148", "Matthew Wolf", "41", "M", "Lexington", "SC", "24:27.0", "07:53.2",], ["29", "28", "Samuel Dalenburg", "15", "M", "Columbia", "SC", "24:28.0", "07:53.5",], ["30", "69", "Vadim Lorick", "16", "M", "Lexington", "SC", "24:29.0", "07:53.9",], ["31", "7", "Alex Blevins", "17", "M", "Lexington", "SC", "24:30.0", "07:54.2",], ["32", "123", "Ken Vowles", "37", "M", "Irmo", "SC", "24:31.0", "07:54.5",], ["33", "81", "Michael Naso", "14", "M", "Irmo", "SC", "25:03.0", "08:04.8",], ["34", "103", "Bryce Shealy", "15", "M", "Irmo", "SC", "25:18.0", "08:09.7",], ["35", "147", "Travis Cowan", "48", "M", "Columbia", "SC", "25:20.0", "08:10.3",], ["36", "33", "Coleman Devaney", "11", "M", "Irmo", "SC", "25:29.0", "08:13.2",], ["37", "36", "Elliott Dominick", "45", "M", "Irmo", "SC", "25:44.0", "08:18.1",], ["38", "56", "Matt Havens", "32", "M", "West Columbia", "SC", "26:20.0", "08:29.7",], ["39", "89", "Jason Powell", "41", "M", "Blythewood", "SC", "26:23.0", "08:30.6",], ["40", "51", "Jacob Gibson", "14", "M", "Irmo", "SC", "26:37.0", "08:35.2",], ["41", "5", "Daniel Barfield", "15", "M", "Blythewood", "SC", "26:41.0", "08:36.5",], ["42", "64", "David Johnson", "46", "M", "Irmo", "SC", "26:43.0", "08:37.1",], ["43", "92", "Bradley Randolph", "33", "M", "Columbia", "SC", "26:44.0", "08:37.4",], ["44", "52", "Parker Grizzle", "15", "M", "Irmo", "SC", "26:45.0", "08:37.7",], ["45", "127", "Austin Weitz", "14", "M", "Irmo", "SC", "26:45.1", "08:37.8",], ["46", "44", "Zachary Freeman", "12", "M", "Lexington", "SC", "26:49.0", "08:39.0",], ["47", "77", "Collin McKinnon", "15", "M", "Irmo", "SC", "26:58.0", "08:41.9",], ["48", "156", "Chris Traister", "21", "M", "Columbia", "SC", "27:06.0", "08:44.5",], ["49", "10", "Avery Blevins", "10", "M", "Lexington", "SC", "27:12.0", "08:46.5",], ["50", "70", "Mel Love", "48", "M", "Columbia", "SC", "27:21.0", "08:49.4",], ["51", "132", "Darcy Bennett", "41", "M", "Summerville", "SC", "27:41.0", "08:55.8",], ["52", "24", "Richard Cook", "50", "M", "Cayce", "SC", "27:46.0", "08:57.4",], ["53", "161", "Clint Burdett", "46", "M", "Irmo", "SC", "27:53.0", "08:59.7",], ["54", "60", "James Hicks", "34", "M", "Jackson", "SC", "27:59.0", "09:01.6",], ["55", "91", "David Privette", "13", "M", "Columbia", "SC", "28:04.0", "09:03.2",], ["56", "155", "Daniel Robles", "7", "M", "Columbia", "SC", "28:10.0", "09:05.2",], ["57", "85", "Steve Ostrovsky", "41", "M", "Monetta", "SC", "28:26.0", "09:10.3",], ["58", "25", "James Corder", "44", "M", "Batesburg", "SC", "28:27.0", "09:10.6",], ["59", "143", "Kendall Jamison", "44", "M", "Stone Mountain", "GA", "28:44.0", "09:16.1",], ["60", "108", "Michael Smith", "17", "M", "Columbia", "SC", "28:49.0", "09:17.7",], ["61", "141", "Cal Senn", "12", "M", "Newberry", "SC", "29:21.0", "09:28.1",], ["62", "138", "Alex Hartley", "13", "M", "Irmo", "SC", "29:25.0", "09:29.4",], ["63", "139", "Bryce Harman", "25", "M", "Columbia", "SC", "29:50.0", "09:37.4",], ["64", "107", "Wayne Shuler", "44", "M", "Irmo", "SC", "29:50.0", "09:37.4",], ["65", "137", "Rocky Soderberg", "70", "M", "Sumter", "SC", "30:06.0", "09:42.6",], ["66", "34", "James Dicker", "53", "M", "Lexington", "SC", "30:13.0", "09:44.8",], ["67", "157", "Henry Holt", "71", "M", "Lexington", "SC", "30:14.0", "09:45.2",], ["68", "2", "Jason Ashley", "28", "M", "Columbia", "SC", "30:36.0", "09:52.3",], ["69", "18", "Travis Brazell", "33", "M", "Irmo", "SC", "31:02.0", "10:00.6",], ["70", "159", "Todd Davis", "43", "M", "Elgin", "SC", "31:25.0", "10:08.1",], ["71", "121", "Anthony Tucker", "44", "M", "Columbia", "SC", "31:35.0", "10:11.3",], ["72", "46", "Benjamin Fryer", "15", "M", "Chapin", "SC", "32:02.0", "10:20.0",], ["73", "23", "Kevin Coogler", "32", "M", "Columbia", "SC", "32:51.0", "10:35.8",], ["74", "124", "Tal Wanish", "16", "M", "Irmo", "SC", "32:53.0", "10:36.5",], ["75", "140", "Brad Harman", "54", "M", "Columbia", "SC", "33:12.0", "10:42.6",], ["76", "38", "Greg Duskin", "48", "M", "Irmo", "SC", "33:18.0", "10:44.5",], ["77", "27", "William Cunningham", "37", "M", "Columbus", "GA", "34:43.0", "11:11.9",], ["78", "37", "Dave Duffy", "47", "M", "Irmo", "SC", "34:56.0", "11:16.1",], ["79", "55", "Carter Havens", "8", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["80", "57", "Ryan Havens", "37", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["81", "136", "Pete Poore", "60", "M", "Columbia", "SC", "36:39.0", "11:49.4",], ["82", "11", "Brian Bowen", "45", "M", "Irmo", "SC", "36:57.0", "11:55.2",], ["83", "133", "Paul Bates", "57", "M", "Lexington", "SC", "37:01.0", "11:56.5",], ["84", "4", "Mike Barbee", "41", "M", "Columbia", "SC", "38:16.0", "12:20.6",], ["85", "50", "Fred Gersdorff", "37", "M", "Chapin", "SC", "41:16.0", "13:18.7",], ["86", "45", "Banks Fryer", "11", "M", "Chapin", "SC", "42:14.0", "13:37.4",], ["87", "104", "Greg Shealy", "46", "M", "Irmo", "SC", "46:36.0", "15:01.9",], ["88", "22", "William Cody", "68", "M", "Lexington", "SC", "53:00.0", "17:05.8",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Overall</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "128", "Hope Whisman", "14", "F", "Irmo", "SC", "21:40.0", "06:59.4",], ["2", "54", "Brianna Hartley", "11", "F", "Irmo", "SC", "23:09.0", "07:28.1",], ["3", "97", "Hannah Robles", "20", "F", "Columbia", "SC", "23:44.0", "07:39.4",], ["4", "100", "Haley Saxby", "17", "F", "Columbia", "SC", "23:53.0", "07:42.3",], ["5", "63", "Anna Johnson", "15", "F", "Irmo", "SC", "24:27.1", "07:53.3",], ["6", "99", "Sarah Robles", "14", "F", "Columbia", "SC", "25:06.0", "08:05.8",], ["7", "114", "Amelia Syfert", "17", "F", "Irmo", "SC", "25:13.0", "08:08.1",], ["8", "150", "Hannah Macon", "13", "F", "Columbia", "SC", "25:45.0", "08:18.4",], ["9", "131", "Morgan Sox", "16", "F", "Irmo", "SC", "25:46.0", "08:18.7",], ["10", "6", "Sarah Blackwell", "36", "F", "Columbia", "SC", "26:05.0", "08:24.8",], ["11", "113", "Sara Steger", "13", "F", "Irmo", "SC", "26:06.0", "08:25.2",], ["12", "142", "Amber Todd", "31", "F", "Columbia", "SC", "26:14.0", "08:27.7",], ["13", "112", "Hope Steger", "13", "F", "Irmo", "SC", "26:43.1", "08:37.1",], ["14", "122", "Colleen Vowles", "39", "F", "Irmo", "SC", "27:27.0", "08:51.3",], ["15", "59", "Tracy Heldreth", "41", "F", "Lexington", "SC", "27:27.0", "08:51.3",], ["16", "119", "Paige Trent", "11", "F", "Columbia", "SC", "27:27.0", "08:51.3",], ["17", "146", "Olivia Grace Starnes", "11", "F", "Little Mountain", "SC", "27:50.0", "08:58.7",], ["18", "42", "Lily Elmore", "12", "F", "Chapin", "SC", "27:54.0", "09:00.0",], ["19", "130", "Amie Meyer", "33", "F", "Irmo", "SC", "28:08.0", "09:04.5",], ["20", "98", "Rachel Robles", "12", "F", "Columbia", "SC", "28:08.0", "09:04.5",], ["21", "1", "Sydney Amodio", "15", "F", "Irmo", "SC", "28:20.0", "09:08.4",], ["22", "78", "Julie McKinnon", "37", "F", "Irmo", "SC", "28:43.0", "09:15.8",], ["23", "14", "Breanna Boyd", "14", "F", "Irmo", "SC", "29:50.0", "09:37.4",], ["24", "13", "Janet Bowen", "45", "F", "Irmo", "SC", "30:03.0", "09:41.6",], ["25", "116", "Emily Thornhill", "17", "F", "Columbia", "SC", "30:50.0", "09:56.8",], ["26", "158", "Trudy Key", "39", "F", "Pomaria", "SC", "31:03.0", "10:01.0",], ["27", "71", "Elizabeth Martin", "24", "F", "West Columbia", "SC", "31:36.0", "10:11.6",], ["28", "126", "Jade Warnock", "17", "F", "Irmo", "SC", "31:37.0", "10:11.9",], ["29", "80", "Karen Moreira", "30", "F", "Lexington", "SC", "31:42.0", "10:13.5",], ["30", "30", "Marie Charlotte Demetriades", "12", "F", "Irmo", "SC", "31:55.0", "10:17.7",], ["31", "120", "Peggy Trent", "45", "F", "Columbia", "SC", "32:06.0", "10:21.3",], ["32", "152", "Taylor Sweeney", "16", "F", "Irmo", "SC", "32:14.0", "10:23.9",], ["33", "88", "Callie Powell", "16", "F", "Blythewood", "SC", "32:15.0", "10:24.2",], ["34", "43", "Kimberly Frawley", "38", "F", "Lexington", "SC", "32:38.0", "10:31.6",], ["35", "73", "Susan McGraw", "42", "F", "West Columbia", "SC", "32:40.0", "10:32.3",], ["36", "95", "Beth Robles", "46", "F", "Columbia", "SC", "32:49.0", "10:35.2",], ["37", "32", "Christy Derrick", "41", "F", "Irmo", "SC", "32:53.0", "10:36.5",], ["38", "31", "Brenda Denys", "13", "F", "Irmo", "SC", "32:58.0", "10:38.1",], ["39", "9", "AnnaMarie Blevins", "12", "F", "Lexington", "SC", "33:08.0", "10:41.3",], ["40", "58", "Tonya Hayes", "43", "F", "Irmo", "SC", "33:29.0", "10:48.1",], ["41", "118", "Carrie Elisabeth Trent", "20", "F", "Columbia", "SC", "33:50.0", "10:54.8",], ["42", "53", "Ann Hall", "51", "F", "chapin", "SC", "34:06.0", "11:00.0",], ["43", "125", "Allie Warnock", "15", "F", "Irmo", "SC", "34:08.0", "11:00.6",], ["44", "93", "Sandy Rickenbaker", "49", "F", "Irmo", "SC", "34:26.0", "11:06.5",], ["45", "153", "Tonya Denys", "10", "F", "Irmo", "SC", "34:33.0", "11:08.7",], ["46", "21", "Allee Cobb", "12", "F", "Columbia", "SC", "34:51.0", "11:14.5",], ["47", "83", "Maggie O'Toole", "12", "F", "Irmo", "SC", "34:51.0", "11:14.5",], ["48", "101", "Valerie Selby", "58", "F", "Irmo", "SC", "35:15.0", "11:22.3",], ["49", "47", "Michelle Fryer", "43", "F", "Chapin", "SC", "35:52.0", "11:34.2",], ["50", "145", "Jennifer Reeves", "44", "F", "Lugoff", "SC", "36:07.0", "11:39.0",], ["51", "3", "Mackensie Barbee", "12", "F", "Columbia", "SC", "38:06.0", "12:17.4",], ["52", "149", "Beth Macon", "15", "F", "Columbia", "SC", "39:02.0", "12:35.5",], ["53", "74", "Angela McGregor", "52", "F", "Irmo", "SC", "39:47.0", "12:50.0",], ["54", "129", "Cheryl Wirkus", "51", "F", "Racine", "WI", "39:49.0", "12:50.6",], ["55", "84", "Kyra Ostrovsky", "14", "F", "Columbia", "SC", "41:24.0", "13:21.3",], ["56", "79", "Melody McNeil", "26", "F", "Aiken", "SC", "42:13.0", "13:37.1",], ["57", "115", "Jackie Taylor", "26", "F", "Aiken", "SC", "44:14.0", "14:16.1",], ["58", "72", "Alexis McGraw", "16", "F", "West Columbia", "SC", "48:37.0", "15:41.0",], ["59", "90", "Georgine Pozanc", "39", "F", "Chapin", "SC", "52:50.0", "17:02.6",], ["60", "106", "Susan Sherer", "56", "F", "Irmo", "SC", "58:56.0", "19:00.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age Under 14</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "35", "Avery Dominick", "13", "M", "Irmo", "SC", "19:22.0", "06:14.8",], ["2", "117", "Caleb Trent", "14", "M", "Columbia", "SC", "20:48.0", "06:42.6",], ["3", "8", "Anderson Blevins", "14", "M", "Lexington", "SC", "22:57.0", "07:24.2",], ["4", "151", "Andrew Herbst", "14", "M", "Irmo", "SC", "23:18.0", "07:31.0",], ["5", "39", "Alec Elmore", "14", "M", "Chapin", "SC", "23:40.0", "07:38.1",], ["6", "81", "Michael Naso", "14", "M", "Irmo", "SC", "25:03.0", "08:04.8",], ["7", "33", "Coleman Devaney", "11", "M", "Irmo", "SC", "25:29.0", "08:13.2",], ["8", "51", "Jacob Gibson", "14", "M", "Irmo", "SC", "26:37.0", "08:35.2",], ["9", "127", "Austin Weitz", "14", "M", "Irmo", "SC", "26:45.1", "08:37.8",], ["10", "44", "Zachary Freeman", "12", "M", "Lexington", "SC", "26:49.0", "08:39.0",], ["11", "10", "Avery Blevins", "10", "M", "Lexington", "SC", "27:12.0", "08:46.5",], ["12", "91", "David Privette", "13", "M", "Columbia", "SC", "28:04.0", "09:03.2",], ["13", "155", "Daniel Robles", "7", "M", "Columbia", "SC", "28:10.0", "09:05.2",], ["14", "141", "Cal Senn", "12", "M", "Newberry", "SC", "29:21.0", "09:28.1",], ["15", "138", "Alex Hartley", "13", "M", "Irmo", "SC", "29:25.0", "09:29.4",], ["16", "55", "Carter Havens", "8", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["17", "45", "Banks Fryer", "11", "M", "Chapin", "SC", "42:14.0", "13:37.4",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 15-19</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "65", "Nathan Jones", "17", "M", "Columbia", "SC", "19:42.0", "06:21.3",], ["2", "111", "Tim Stafford", "16", "M", "Irmo", "SC", "19:49.0", "06:23.5",], ["3", "12", "James Bowen", "15", "M", "Irmo", "SC", "20:00.0", "06:27.1",], ["4", "17", "Michael Bradley", "16", "M", "Irmo", "SC", "20:04.0", "06:28.4",], ["5", "68", "Joseph Klasnic", "16", "M", "columbia", "SC", "20:40.0", "06:40.0",], ["6", "75", "Jackson McGregor", "16", "M", "Irmo", "SC", "21:01.0", "06:46.8",], ["7", "29", "Chris Davis", "16", "M", "Irmo", "SC", "21:33.0", "06:57.1",], ["8", "96", "David Robles", "16", "M", "Columbia", "SC", "22:01.0", "07:06.1",], ["9", "16", "Mark Bradley", "15", "M", "Irmo", "SC", "22:33.0", "07:16.5",], ["10", "66", "DJ Jordan", "17", "M", "Irmo", "SC", "22:41.0", "07:19.0",], ["11", "82", "Andrew Nienhuis", "16", "M", "Blythewood", "SC", "23:46.0", "07:40.0",], ["12", "162", "Justin Tweito", "17", "M", "Irmo", "SC", "24:17.0", "07:50.0",], ["13", "15", "Joshua Boyd", "15", "M", "Irmo", "SC", "24:24.0", "07:52.3",], ["14", "28", "Samuel Dalenburg", "15", "M", "Columbia", "SC", "24:28.0", "07:53.5",], ["15", "69", "Vadim Lorick", "16", "M", "Lexington", "SC", "24:29.0", "07:53.9",], ["16", "7", "Alex Blevins", "17", "M", "Lexington", "SC", "24:30.0", "07:54.2",], ["17", "103", "Bryce Shealy", "15", "M", "Irmo", "SC", "25:18.0", "08:09.7",], ["18", "5", "Daniel Barfield", "15", "M", "Blythewood", "SC", "26:41.0", "08:36.5",], ["19", "52", "Parker Grizzle", "15", "M", "Irmo", "SC", "26:45.0", "08:37.7",], ["20", "77", "Collin McKinnon", "15", "M", "Irmo", "SC", "26:58.0", "08:41.9",], ["21", "108", "Michael Smith", "17", "M", "Columbia", "SC", "28:49.0", "09:17.7",], ["22", "46", "Benjamin Fryer", "15", "M", "Chapin", "SC", "32:02.0", "10:20.0",], ["23", "124", "Tal Wanish", "16", "M", "Irmo", "SC", "32:53.0", "10:36.5",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 20-24</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "156", "Chris Traister", "21", "M", "Columbia", "SC", "27:06.0", "08:44.5",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 25-29</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "160", "Ryan Plexico", "28", "M", "Columbia", "SC", "18:35.0", "05:59.7",], ["2", "139", "Bryce Harman", "25", "M", "Columbia", "SC", "29:50.0", "09:37.4",], ["3", "2", "Jason Ashley", "28", "M", "Columbia", "SC", "30:36.0", "09:52.3",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 30-34</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "56", "Matt Havens", "32", "M", "West Columbia", "SC", "26:20.0", "08:29.7",], ["2", "92", "Bradley Randolph", "33", "M", "Columbia", "SC", "26:44.0", "08:37.4",], ["3", "60", "James Hicks", "34", "M", "Jackson", "SC", "27:59.0", "09:01.6",], ["4", "18", "Travis Brazell", "33", "M", "Irmo", "SC", "31:02.0", "10:00.6",], ["5", "23", "Kevin Coogler", "32", "M", "Columbia", "SC", "32:51.0", "10:35.8",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 35-39</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "19", "Darrell Brown", "36", "M", "columbia", "SC", "21:28.0", "06:55.5",], ["2", "154", "Alex McDonald", "37", "M", "Columbia", "SC", "21:56.0", "07:04.5",], ["3", "87", "Toby Porter", "36", "M", "West Columbia", "SC", "22:32.0", "07:16.1",], ["4", "123", "Ken Vowles", "37", "M", "Irmo", "SC", "24:31.0", "07:54.5",], ["5", "27", "William Cunningham", "37", "M", "Columbus", "GA", "34:43.0", "11:11.9",], ["6", "57", "Ryan Havens", "37", "M", "Lexington", "SC", "35:12.0", "11:21.3",], ["7", "50", "Fred Gersdorff", "37", "M", "Chapin", "SC", "41:16.0", "13:18.7",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 40-44</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "135", "William Schmitz", "40", "M", "Lexington", "SC", "24:07.0", "07:46.8",], ["2", "144", "Ted Hewitt", "43", "M", "Columbia", "SC", "24:08.0", "07:47.1",], ["3", "148", "Matthew Wolf", "41", "M", "Lexington", "SC", "24:27.0", "07:53.2",], ["4", "89", "Jason Powell", "41", "M", "Blythewood", "SC", "26:23.0", "08:30.6",], ["5", "132", "Darcy Bennett", "41", "M", "Summerville", "SC", "27:41.0", "08:55.8",], ["6", "85", "Steve Ostrovsky", "41", "M", "Monetta", "SC", "28:26.0", "09:10.3",], ["7", "25", "James Corder", "44", "M", "Batesburg", "SC", "28:27.0", "09:10.6",], ["8", "143", "Kendall Jamison", "44", "M", "Stone Mountain", "GA", "28:44.0", "09:16.1",], ["9", "107", "Wayne Shuler", "44", "M", "Irmo", "SC", "29:50.0", "09:37.4",], ["10", "159", "Todd Davis", "43", "M", "Elgin", "SC", "31:25.0", "10:08.1",], ["11", "121", "Anthony Tucker", "44", "M", "Columbia", "SC", "31:35.0", "10:11.3",], ["12", "4", "Mike Barbee", "41", "M", "Columbia", "SC", "38:16.0", "12:20.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 45-49</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "110", "Rick Stafford", "45", "M", "Irmo", "SC", "22:58.0", "07:24.5",], ["2", "147", "Travis Cowan", "48", "M", "Columbia", "SC", "25:20.0", "08:10.3",], ["3", "36", "Elliott Dominick", "45", "M", "Irmo", "SC", "25:44.0", "08:18.1",], ["4", "64", "David Johnson", "46", "M", "Irmo", "SC", "26:43.0", "08:37.1",], ["5", "70", "Mel Love", "48", "M", "Columbia", "SC", "27:21.0", "08:49.4",], ["6", "161", "Clint Burdett", "46", "M", "Irmo", "SC", "27:53.0", "08:59.7",], ["7", "38", "Greg Duskin", "48", "M", "Irmo", "SC", "33:18.0", "10:44.5",], ["8", "37", "Dave Duffy", "47", "M", "Irmo", "SC", "34:56.0", "11:16.1",], ["9", "11", "Brian Bowen", "45", "M", "Irmo", "SC", "36:57.0", "11:55.2",], ["10", "104", "Greg Shealy", "46", "M", "Irmo", "SC", "46:36.0", "15:01.9",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 50-54</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "134", "Geary McAlister", "54", "M", "Rock Hill", "SC", "22:50.0", "07:21.9",], ["2", "24", "Richard Cook", "50", "M", "Cayce", "SC", "27:46.0", "08:57.4",], ["3", "34", "James Dicker", "53", "M", "Lexington", "SC", "30:13.0", "09:44.8",], ["4", "140", "Brad Harman", "54", "M", "Columbia", "SC", "33:12.0", "10:42.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 55-59</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "133", "Paul Bates", "57", "M", "Lexington", "SC", "37:01.0", "11:56.5",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 60-64</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "136", "Pete Poore", "60", "M", "Columbia", "SC", "36:39.0", "11:49.4",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 65-69</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "22", "William Cody", "68", "M", "Lexington", "SC", "53:00.0", "17:05.8",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Male Age 70-74</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "137", "Rocky Soderberg", "70", "M", "Sumter", "SC", "30:06.0", "09:42.6",], ["2", "157", "Henry Holt", "71", "M", "Lexington", "SC", "30:14.0", "09:45.2",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age Under 14</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "54", "Brianna Hartley", "11", "F", "Irmo", "SC", "23:09.0", "07:28.1",], ["2", "99", "Sarah Robles", "14", "F", "Columbia", "SC", "25:06.0", "08:05.8",], ["3", "150", "Hannah Macon", "13", "F", "Columbia", "SC", "25:45.0", "08:18.4",], ["4", "113", "Sara Steger", "13", "F", "Irmo", "SC", "26:06.0", "08:25.2",], ["5", "112", "Hope Steger", "13", "F", "Irmo", "SC", "26:43.1", "08:37.1",], ["6", "119", "Paige Trent", "11", "F", "Columbia", "SC", "27:27.0", "08:51.3",], ["7", "146", "Olivia Grace Starnes", "11", "F", "Little Mountain", "SC", "27:50.0", "08:58.7",], ["8", "42", "Lily Elmore", "12", "F", "Chapin", "SC", "27:54.0", "09:00.0",], ["9", "98", "Rachel Robles", "12", "F", "Columbia", "SC", "28:08.0", "09:04.5",], ["10", "14", "Breanna Boyd", "14", "F", "Irmo", "SC", "29:50.0", "09:37.4",], ["11", "30", "Marie Charlotte Demetriades", "12", "F", "Irmo", "SC", "31:55.0", "10:17.7",], ["12", "31", "Brenda Denys", "13", "F", "Irmo", "SC", "32:58.0", "10:38.1",], ["13", "9", "AnnaMarie Blevins", "12", "F", "Lexington", "SC", "33:08.0", "10:41.3",], ["14", "153", "Tonya Denys", "10", "F", "Irmo", "SC", "34:33.0", "11:08.7",], ["15", "21", "Allee Cobb", "12", "F", "Columbia", "SC", "34:51.0", "11:14.5",], ["16", "83", "Maggie O'Toole", "12", "F", "Irmo", "SC", "34:51.0", "11:14.5",], ["17", "3", "Mackensie Barbee", "12", "F", "Columbia", "SC", "38:06.0", "12:17.4",], ["18", "84", "Kyra Ostrovsky", "14", "F", "Columbia", "SC", "41:24.0", "13:21.3",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 15-19</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "100", "Haley Saxby", "17", "F", "Columbia", "SC", "23:53.0", "07:42.3",], ["2", "63", "Anna Johnson", "15", "F", "Irmo", "SC", "24:27.1", "07:53.3",], ["3", "114", "Amelia Syfert", "17", "F", "Irmo", "SC", "25:13.0", "08:08.1",], ["4", "131", "Morgan Sox", "16", "F", "Irmo", "SC", "25:46.0", "08:18.7",], ["5", "1", "Sydney Amodio", "15", "F", "Irmo", "SC", "28:20.0", "09:08.4",], ["6", "116", "Emily Thornhill", "17", "F", "Columbia", "SC", "30:50.0", "09:56.8",], ["7", "126", "Jade Warnock", "17", "F", "Irmo", "SC", "31:37.0", "10:11.9",], ["8", "152", "Taylor Sweeney", "16", "F", "Irmo", "SC", "32:14.0", "10:23.9",], ["9", "88", "Callie Powell", "16", "F", "Blythewood", "SC", "32:15.0", "10:24.2",], ["10", "125", "Allie Warnock", "15", "F", "Irmo", "SC", "34:08.0", "11:00.6",], ["11", "149", "Beth Macon", "15", "F", "Columbia", "SC", "39:02.0", "12:35.5",], ["12", "72", "Alexis McGraw", "16", "F", "West Columbia", "SC", "48:37.0", "15:41.0",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 20-24</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "97", "Hannah Robles", "20", "F", "Columbia", "SC", "23:44.0", "07:39.4",], ["2", "71", "Elizabeth Martin", "24", "F", "West Columbia", "SC", "31:36.0", "10:11.6",], ["3", "118", "Carrie Elisabeth Trent", "20", "F", "Columbia", "SC", "33:50.0", "10:54.8",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 25-29</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "79", "Melody McNeil", "26", "F", "Aiken", "SC", "42:13.0", "13:37.1",], ["2", "115", "Jackie Taylor", "26", "F", "Aiken", "SC", "44:14.0", "14:16.1",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 30-34</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "142", "Amber Todd", "31", "F", "Columbia", "SC", "26:14.0", "08:27.7",], ["2", "130", "Amie Meyer", "33", "F", "Irmo", "SC", "28:08.0", "09:04.5",], ["3", "80", "Karen Moreira", "30", "F", "Lexington", "SC", "31:42.0", "10:13.5",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 35-39</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "6", "Sarah Blackwell", "36", "F", "Columbia", "SC", "26:05.0", "08:24.8",], ["2", "122", "Colleen Vowles", "39", "F", "Irmo", "SC", "27:27.0", "08:51.3",], ["3", "78", "Julie McKinnon", "37", "F", "Irmo", "SC", "28:43.0", "09:15.8",], ["4", "158", "Trudy Key", "39", "F", "Pomaria", "SC", "31:03.0", "10:01.0",], ["5", "43", "Kimberly Frawley", "38", "F", "Lexington", "SC", "32:38.0", "10:31.6",], ["6", "90", "Georgine Pozanc", "39", "F", "Chapin", "SC", "52:50.0", "17:02.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 40-44</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "59", "Tracy Heldreth", "41", "F", "Lexington", "SC", "27:27.0", "08:51.3",], ["2", "73", "Susan McGraw", "42", "F", "West Columbia", "SC", "32:40.0", "10:32.3",], ["3", "32", "Christy Derrick", "41", "F", "Irmo", "SC", "32:53.0", "10:36.5",], ["4", "58", "Tonya Hayes", "43", "F", "Irmo", "SC", "33:29.0", "10:48.1",], ["5", "47", "Michelle Fryer", "43", "F", "Chapin", "SC", "35:52.0", "11:34.2",], ["6", "145", "Jennifer Reeves", "44", "F", "Lugoff", "SC", "36:07.0", "11:39.0",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 45-49</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "13", "Janet Bowen", "45", "F", "Irmo", "SC", "30:03.0", "09:41.6",], ["2", "120", "Peggy Trent", "45", "F", "Columbia", "SC", "32:06.0", "10:21.3",], ["3", "95", "Beth Robles", "46", "F", "Columbia", "SC", "32:49.0", "10:35.2",], ["4", "93", "Sandy Rickenbaker", "49", "F", "Irmo", "SC", "34:26.0", "11:06.5",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 50-54</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "53", "Ann Hall", "51", "F", "chapin", "SC", "34:06.0", "11:00.0",], ["2", "74", "Angela McGregor", "52", "F", "Irmo", "SC", "39:47.0", "12:50.0",], ["3", "129", "Cheryl Wirkus", "51", "F", "Racine", "WI", "39:49.0", "12:50.6",],] as $row): ?>
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
    </div>
  </li>
  <li>
    <div class="collapsible-header">Female Age 55-59</div>
    <div class="collapsible-body container">
      <table class="responsive-table highlight bordered">
        <thead>
          <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace"] as $header): ?>
            <th>
              <?= htmlspecialchars($header) ?>
            </th>
          <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ([["1", "101", "Valerie Selby", "58", "F", "Irmo", "SC", "35:15.0", "11:22.3",], ["2", "106", "Susan Sherer", "56", "F", "Irmo", "SC", "58:56.0", "19:00.6",],] as $row): ?>
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
    </div>
  </li>
</ul>
<?php
require_once Values::FOOTER_INC;
