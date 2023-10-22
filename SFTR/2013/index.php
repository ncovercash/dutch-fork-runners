<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "sftr");
define("PAGE_TITLE", "2013 Silver Fox Trail Run");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("2013 Silver Fox Trail Run");
?>
    <div class="section">
      <h4 class="header center">Sponsors</h4>
      <div class="row">
        <h3>Silver Level:</h3>
        <div align="center" class="col m4 s12">
          <a href="http://www.fitbodybootcamp.com/columbiafitnessbootcamp/"><img class="col s12" src="FitBody.png">FitBody Boot Camp - Columbia</a>
        </div>
        <div align="center" class="col m4 s12">
          <a href="http://columbiaymca.org/locations/northwest-family-ymca/"><img class="col s12" src="YMCA.png">YMCA NorthWest Family Center</a>
        </div>
      </div>
      <div class="row">
        <h3>Green Level:</h3>
        <div align="center" class="col m2 s6">
          <a href="http://esourceshr.com"><img class="col s12" src="eSources.png">eSources, LLC</a>
        </div>
        <div align="center" class="col m2 s6">
          <a href="http://lakemurrayhearing.com"><img class="col s12" src="lmh.png">Lake Murray Hearing Associates</a>
        </div>
        <div align="center" class="col m2 s6">
          <a href="http://allsouth.org"><img class="col s12" src="allsouth.png">All South Federal Credit Union</a>
        </div>
        <div align="center" class="col m2 s6">
          <a href="http://www.shopkathyskreations.com/"><img class="col s12" src="kk.png">Kathy's Kreations</a>
        </div>
        <div align="center" class="col m2 s6">
          <a href="javascript:alert('👌👌👌');"><img class="col s12" src="lindler.png">The Lindler Family</a>
        </div>
      </div>
      <div class="row">
        <h3>White Level:</h3>
        <p class="flow-text">Charles A. Phipps, Attorney at Law</p>
        <p class="flow-text">Halcyon Real Estate Services, LLC</p>
        <p class="flow-text">Rhodes Graduation Services</p>
        <p class="flow-text">Drs. Alexis Collins & Jim Nyland, Children's Dentistry</p>
        <p class="flow-text">Pitner Orthodontics</p>
      </div>
      <div class="row">
        <h3>In-kind Donations:</h3>
        <p class="flow-text">Fleet Feet Sports, Columbia</p>
        <p class="flow-text">RoadID</p>
        <p class="flow-text">Publix</p>
        <p class="flow-text">Walmart</p>
        <p class="flow-text">Atlanta Bread Company</p>
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
                <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                      <th><?= htmlspecialchars($header) ?></th>
                <?php endforeach; ?>
            </thead>
            <tbody>
                <?php foreach ([["1", "86", "Avery Dominick", "14", "M", "Irmo", "SC", "18:21.7", "05:55.4",], ["2", "142", "Dobson Matt", "43", "M", "-", "SC", "19:07.1", "06:10.0",], ["3", "57", "James Bowen", "16", "M", "Irmo", "SC", "19:36.4", "06:19.5",], ["4", "52", "Timothy Stafford", "17", "M", "Irmo", "SC", "19:52.6", "06:24.7",], ["5", "62", "Jonathan Phipps", "14", "M", "Columbia", "SC", "19:53.0", "06:24.8",], ["6", "68", "Chris Davis", "17", "M", "Irmo", "SC", "20:15.7", "06:32.2",], ["7", "55", "Hope Whisman", "15", "F", "Irmo", "SC", "20:23.0", "06:34.5",], ["8", "129", "Daniel Tew", "27", "M", "Greenwood", "SC", "20:26.1", "06:35.5",], ["9", "72", "Mark Bradley", "16", "M", "Irmo", "SC", "20:43.9", "06:41.3",], ["10", "120", "Caleb Trent", "15", "M", "Columbia", "SC", "20:44.3", "06:41.4",], ["11", "56", "Jackson McGregor", "17", "M", "Irmo", "SC", "20:58.5", "06:46.0",], ["12", "127", "Robert Daley", "48", "M", "Columbia", "SC", "21:15.8", "06:51.5",], ["13", "136", "Chalgren Alex", "15", "M", "-", "SC", "21:24.9", "06:54.5",], ["14", "74", "Anna Johnson", "17", "F", "Irmo", "SC", "21:25.8", "06:54.8",], ["15", "101", "Geary McAlister", "55", "M", "Rock Hill", "SC", "22:23.8", "07:13.5",], ["16", "38", "Keith Schmidt", "35", "M", "Columbia", "SC", "22:30.7", "07:15.7",], ["17", "87", "Andrew Herbst", "15", "M", "Irmo", "SC", "22:42.2", "07:19.4",], ["18", "73", "Michael Bradley", "17", "M", "Irmo", "SC", "22:46.1", "07:20.7",], ["19", "85", "Collin McKinnon", "16", "M", "Irmo", "SC", "22:54.3", "07:23.3",], ["20", "67", "Alec Elmore", "15", "M", "Chapin", "SC", "22:59.6", "07:25.0",], ["21", "103", "Janay Chisolm", "18", "F", "Columbia", "SC", "23:30.1", "07:34.9",], ["22", "18", "Richard Stafford", "46", "M", "Irmo", "SC", "23:38.6", "07:37.6",], ["23", "70", "Coleman Devaney", "12", "M", "Irmo", "SC", "23:50.1", "07:41.3",], ["24", "130", "Bryce Harman", "26", "M", "Columbia", "SC", "23:53.7", "07:42.5",], ["25", "36", "Darrell Green", "29", "M", "Columbia", "SC", "24:11.5", "07:48.2",], ["26", "77", "Hope Steger", "14", "F", "Irmo", "SC", "24:34.2", "07:55.5",], ["27", "64", "Austin Weitz", "15", "M", "IRMO", "SC", "24:45.5", "07:59.2",], ["28", "121", "Ammar Dossaji", "13", "M", "Irmo", "SC", "24:53.1", "08:01.6",], ["29", "76", "Sara Steger", "14", "F", "Irmo", "SC", "24:55.1", "08:02.3",], ["30", "37", "Larry Bates", "55", "M", "Columbia", "SC", "25:00.4", "08:04.0",], ["31", "45", "Kenneth Ordonez", "33", "M", "jackson heights", "NY", "25:08.9", "08:06.7",], ["32", "114", "Brianna Hartley", "12", "F", "Irmo", "SC", "25:11.9", "08:07.7",], ["33", "3", "Franklin Walker", "36", "M", "Columbia", "SC", "25:16.7", "08:09.3",], ["34", "29", "Rick Gibbons", "53", "M", "Chapin", "SC", "25:27.0", "08:12.6",], ["35", "51", "Marie Demetriades", "13", "F", "Irmo", "SC", "25:31.8", "08:14.1",], ["36", "33", "Sarah Blackwell", "37", "F", "Columbia", "SC", "25:32.1", "08:14.2",], ["37", "75", "Joshua Camp", "15", "M", "Irmo", "SC", "25:32.5", "08:14.4",], ["38", "1", "Wayne Shuler", "45", "M", "Irmo", "SC", "25:33.6", "08:14.7",], ["39", "59", "Lindsey Wilson", "14", "M", "Irmo", "SC", "25:45.8", "08:18.6",], ["40", "88", "Morgan Sox", "17", "F", "Irmo", "SC", "25:46.6", "08:18.9",], ["41", "119", "Paige Trent", "12", "F", "Columbia", "SC", "25:53.0", "08:21.0",], ["42", "110", "Vadim Lorick", "17", "M", "Lexington", "SC", "25:56.3", "08:22.0",], ["43", "140", "Denys Brenda", "14", "F", "Columbia", "SC", "26:15.8", "08:28.3",], ["44", "63", "Evan Fish", "13", "M", "Irmo", "SC", "26:22.8", "08:30.6",], ["45", "132", "Ian Fish", "38", "M", "Irmo", "SC", "26:23.2", "08:30.7",], ["46", "117", "Brady Andrews", "17", "M", "Lexington", "SC", "26:38.4", "08:35.6",], ["47", "113", "Breanna Boyd", "15", "F", "Irmo", "SC", "26:39.1", "08:35.8",], ["48", "118", "Hannah Macon", "24", "F", "Columbia", "SC", "26:43.0", "08:37.1",], ["49", "141", "Rychener Shannon", "12", "F", "-", "SC", "26:59.4", "08:42.4",], ["50", "22", "Ken McGregor", "52", "M", "Irmo", "SC", "27:07.3", "08:44.9",], ["51", "58", "Luke Naylor", "10", "M", "Irmo", "SC", "27:15.7", "08:47.6",], ["52", "28", "Joe Naylor", "42", "M", "Irmo", "SC", "27:16.0", "08:47.7",], ["53", "78", "Zachary Freeman", "13", "M", "Lexington", "SC", "27:19.7", "08:48.9",], ["54", "97", "Anna Jenkins", "12", "F", "Irmo", "SC", "27:29.0", "08:51.9",], ["55", "84", "Allee Cobb", "13", "F", "Columbia", "SC", "27:29.3", "08:52.0",], ["56", "46", "Margaret Lynn O'Toole", "13", "F", "Irmo", "SC", "27:29.7", "08:52.2",], ["57", "107", "Olivia Starnes", "12", "F", "Little Mountain", "SC", "27:44.0", "08:56.8",], ["58", "82", "Sydney Amodio", "16", "F", "IRMO", "SC", "27:45.1", "08:57.1",], ["59", "65", "Mackensie Barbee", "13", "F", "Columbia", "SC", "27:45.7", "08:57.3",], ["60", "71", "Lauren Devaney", "9", "F", "Irmo", "SC", "27:51.3", "08:59.1",], ["61", "137", "Smith Hunter", "26", "M", "-", "SC", "28:16.6", "09:07.3",], ["62", "112", "Bryce Shealy", "16", "M", "Irmo", "SC", "28:17.7", "09:07.6",], ["63", "32", "Bobby Kirby", "42", "M", "Columbia", "SC", "28:21.3", "09:08.8",], ["64", "42", "Gavin Weiser", "28", "M", "Cayce", "SC", "28:24.3", "09:09.8",], ["65", "4", "James Hicks", "35", "M", "Jackson", "SC", "28:30.6", "09:11.8",], ["66", "54", "Jacob Gibson", "15", "M", "Irmo", "SC", "28:32.0", "09:12.3",], ["67", "108", "Anna Katherine Daley", "14", "F", "Columbia", "SC", "28:38.3", "09:14.3",], ["68", "81", "Zoe Aurednik", "12", "F", "Lexington", "SC", "28:39.2", "09:14.6",], ["69", "104", "Benjamin Fryer", "16", "M", "Chapin", "SC", "28:45.2", "09:16.5",], ["70", "49", "Tonya Denys", "11", "F", "Irmo", "SC", "28:51.4", "09:18.5",], ["71", "61", "Anna Marie Blevins", "13", "F", "Lexington", "SC", "29:10.4", "09:24.6",], ["72", "66", "Lily Elmore", "13", "F", "Chapin", "SC", "29:12.0", "09:25.2",], ["73", "95", "Joseph Tamargo", "12", "M", "Irmo", "SC", "29:26.4", "09:29.8",], ["74", "25", "Janet Bowen", "46", "F", "Irmo", "SC", "29:30.0", "09:31.0",], ["75", "93", "Alex Ponomarev", "64", "M", "Columbia", "SC", "29:39.3", "09:34.0",], ["76", "135", "George Stewart", "40", "M", "Lexington", "SC", "29:42.2", "09:34.9",], ["77", "134", "Henry Holt", "77", "M", "Lexington", "SC", "29:42.8", "09:35.1",], ["78", "39", "Steve Amodio", "52", "M", "IRMO", "SC", "29:44.2", "09:35.5",], ["79", "31", "Christa Sheldon", "44", "F", "Columbia", "SC", "29:46.0", "09:36.1",], ["80", "43", "Josh Dimuzio", "33", "M", "Irmo", "SC", "29:48.8", "09:37.0",], ["81", "44", "Denise Shelton", "32", "F", "Irmo", "SC", "29:49.3", "09:37.2",], ["82", "60", "Mark Sheldon", "11", "M", "Columbia", "SC", "29:50.4", "09:37.5",], ["83", "115", "Parker Andrews", "13", "F", "Lexington", "SC", "29:50.9", "09:37.7",], ["84", "94", "Maddie Crapps", "12", "F", "Irmo", "SC", "29:59.3", "09:40.4",], ["85", "47", "Mary Ann OToole", "12", "F", "Irmo", "SC", "31:14.8", "10:04.8",], ["86", "139", "McLane Chris", "39", "M", "-", "SC", "31:15.3", "10:04.9",], ["87", "35", "David Johnson", "47", "M", "Irmo", "SC", "31:21.5", "10:06.9",], ["88", "7", "David Neubaum", "42", "M", "Columbia", "SC", "31:27.7", "10:08.9",], ["89", "126", "Jami Elder", "43", "M", "Sumter", "SC", "31:33.1", "10:10.7",], ["90", "116", "Makenzie Andrews", "16", "F", "Lexington", "SC", "32:04.3", "10:20.7",], ["91", "40", "Chad Shivar", "40", "M", "Irmo", "SC", "32:06.9", "10:21.6",], ["92", "13", "Annie Opseth", "25", "F", "Columbia", "SC", "32:18.9", "10:25.5",], ["93", "99", "Anna West", "32", "F", "Pelion", "SC", "32:21.3", "10:26.2",], ["94", "12", "Karalyn Miskie", "30", "F", "Chapin", "SC", "32:29.5", "10:28.9",], ["95", "109", "Elizabeth Daley", "12", "F", "Columbia", "SC", "32:48.0", "10:34.8",], ["96", "123", "Harry Strick", "59", "M", "Blythewood", "SC", "33:08.5", "10:41.5",], ["97", "105", "Lauren Fryer", "14", "F", "Chapin", "SC", "33:22.5", "10:46.0",], ["98", "106", "Banks Fryer", "12", "F", "Chapin", "SC", "33:53.7", "10:56.0",], ["99", "131", "John Gasque", "53", "M", "Columbia", "SC", "34:04.7", "10:59.6",], ["100", "24", "Brian Bowen", "46", "M", "Irmo", "SC", "34:11.1", "11:01.6",], ["101", "69", "Hayden Stansbury", "13", "M", "Columbia", "SC", "34:25.7", "11:06.4",], ["102", "83", "Mandy Kirkley", "12", "F", "Irmo", "SC", "35:16.8", "11:22.8",], ["103", "100", "Sara Sims", "37", "F", "West Columbia", "SC", "35:20.2", "11:23.9",], ["104", "23", "Stephanie Dukes", "39", "F", "Lexington", "SC", "35:22.0", "11:24.5",], ["105", "41", "Dave Duffy", "48", "M", "Irmo", "SC", "35:27.4", "11:26.3",], ["106", "21", "Barrett Isbell", "24", "M", "Lexington", "SC", "35:36.0", "11:29.0",], ["107", "20", "Amanda Isbell", "24", "F", "Lexington", "SC", "36:08.8", "11:39.6",], ["108", "125", "Nancy Martin", "46", "F", "Sumter", "SC", "36:57.5", "11:55.3",], ["109", "11", "Rebecca Spires", "23", "F", "Lexington", "SC", "37:09.6", "11:59.2",], ["110", "34", "Michele Bradley", "50", "F", "Irmo", "SC", "37:15.0", "12:01.0",], ["111", "138", "Poore Pete", "61", "M", "Columbia", "SC", "38:07.0", "12:17.7",], ["112", "10", "Tracy Spires", "51", "F", "Lexington", "SC", "38:14.7", "12:20.2",], ["113", "124", "Jessica Gonzalez", "32", "F", "Columbia", "SC", "38:41.6", "12:28.9",], ["114", "122", "Jennifer Tudor", "41", "F", "COLUMBIA", "SC", "39:30.1", "12:44.5",], ["115", "102", "Paul Bates", "58", "M", "Lexington", "SC", "40:02.6", "12:55.0",], ["116", "79", "Anna Freeman", "11", "F", "Lexington", "SC", "40:06.9", "12:56.4",], ["117", "133", "Jay Freeman", "42", "M", "Lexington", "SC", "41:04.4", "13:15.0",], ["118", "48", "Saverio Martin O'Toole10", "M", "Irmo", "SC", "41:50.8", "13:29.9",], ["119", "50", "Jalesa Denys", "8", "F", "Irmo", "SC", "42:13.0", "13:37.1",], ["120", "16", "Kimberly Taylor", "41", "F", "Irmo", "SC", "42:18.4", "13:38.8",], ["121", "111", "Sadie Lorick", "9", "F", "Lexington", "SC", "42:27.8", "13:41.9",], ["122", "128", "Joseph Lorick", "40", "M", "Lexington", "SC", "43:17.2", "13:57.8",], ["123", "19", "Ernest Butler", "32", "M", "Irmo", "SC", "43:19.1", "13:58.4",], ["124", "53", "Caitlin Mayne", "15", "F", "Columbia", "SC", "46:25.1", "14:58.4",], ["125", "80", "Kelli Tracy", "15", "F", "Blythewood", "SC", "49:29.6", "15:57.9",], ["126", "9", "Dina Mauldin", "41", "F", "Columbia", "SC", "49:30.2", "15:58.1",], ["127", "96", "James Tamargo", "11", "M", "Irmo", "SC", "51:58.8", "16:46.1",], ["128", "92", "Joel Tamargo", "40", "M", "Irmo", "SC", "1:03:00", "20:19.4",], ["129", "91", "Michelle Tamargo", "44", "F", "Irmo", "SC", "1:03:01", "20:19.7",], ["130", "98", "William Cody", "69", "M", "Columbia", "SC", "1:03:02", "20:20.0",], ["131", "5", "Morgan Lewis", "25", "F", "Lexington", "SC", "1:03:07", "20:21.6",], ["132", "6", "Courtney Smith", "32", "F", "Columbia", "SC", "1:04:31", "20:48.7",], ["133", "27", "Shrividya Narayanaswamy", "31", "F", "columbia", "SC", "1:04:35", "20:50.0",], ["134", "2", "Ellen Reddick", "44", "F", "Conyers", "GA", "1:04:50", "20:54.8",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "86", "Avery Dominick", "14", "M", "Irmo", "SC", "18:21.7", "05:55.4",], ["2", "142", "Dobson Matt", "43", "M", "-", "SC", "19:07.1", "06:10.0",], ["3", "57", "James Bowen", "16", "M", "Irmo", "SC", "19:36.4", "06:19.5",], ["4", "52", "Timothy Stafford", "17", "M", "Irmo", "SC", "19:52.6", "06:24.7",], ["5", "62", "Jonathan Phipps", "14", "M", "Columbia", "SC", "19:53.0", "06:24.8",], ["6", "68", "Chris Davis", "17", "M", "Irmo", "SC", "20:15.7", "06:32.2",], ["7", "129", "Daniel Tew", "27", "M", "Greenwood", "SC", "20:26.1", "06:35.5",], ["8", "72", "Mark Bradley", "16", "M", "Irmo", "SC", "20:43.9", "06:41.3",], ["9", "120", "Caleb Trent", "15", "M", "Columbia", "SC", "20:44.3", "06:41.4",], ["10", "56", "Jackson McGregor", "17", "M", "Irmo", "SC", "20:58.5", "06:46.0",], ["11", "127", "Robert Daley", "48", "M", "Columbia", "SC", "21:15.8", "06:51.5",], ["12", "136", "Chalgren Alex", "15", "M", "-", "SC", "21:24.9", "06:54.5",], ["13", "101", "Geary McAlister", "55", "M", "Rock Hill", "SC", "22:23.8", "07:13.5",], ["14", "38", "Keith Schmidt", "35", "M", "Columbia", "SC", "22:30.7", "07:15.7",], ["15", "87", "Andrew Herbst", "15", "M", "Irmo", "SC", "22:42.2", "07:19.4",], ["16", "73", "Michael Bradley", "17", "M", "Irmo", "SC", "22:46.1", "07:20.7",], ["17", "85", "Collin McKinnon", "16", "M", "Irmo", "SC", "22:54.3", "07:23.3",], ["18", "67", "Alec Elmore", "15", "M", "Chapin", "SC", "22:59.6", "07:25.0",], ["19", "18", "Richard Stafford", "46", "M", "Irmo", "SC", "23:38.6", "07:37.6",], ["20", "70", "Coleman Devaney", "12", "M", "Irmo", "SC", "23:50.1", "07:41.3",], ["21", "130", "Bryce Harman", "26", "M", "Columbia", "SC", "23:53.7", "07:42.5",], ["22", "36", "Darrell Green", "29", "M", "Columbia", "SC", "24:11.5", "07:48.2",], ["23", "64", "Maddie Crapps", "15", "M", "IRMO", "SC", "24:45.5", "07:59.2",], ["24", "121", "Ammar Dossaji", "13", "M", "Irmo", "SC", "24:53.1", "08:01.6",], ["25", "37", "Larry Bates", "55", "M", "Columbia", "SC", "25:00.4", "08:04.0",], ["26", "45", "Kenneth Ordonez", "33", "M", "jackson heights", "NY", "25:08.9", "08:06.7",], ["27", "3", "Franklin Walker", "36", "M", "Columbia", "SC", "25:16.7", "08:09.3",], ["28", "29", "Rick Gibbons", "53", "M", "Chapin", "SC", "25:27.0", "08:12.6",], ["29", "75", "Joshua Camp", "15", "M", "Irmo", "SC", "25:32.5", "08:14.4",], ["30", "1", "Wayne Shuler", "45", "M", "Irmo", "SC", "25:33.6", "08:14.7",], ["31", "59", "Lindsey Wilson", "14", "M", "Irmo", "SC", "25:45.8", "08:18.6",], ["32", "110", "Vadim Lorick", "17", "M", "Lexington", "SC", "25:56.3", "08:22.0",], ["33", "63", "Evan Fish", "13", "M", "Irmo", "SC", "26:22.8", "08:30.6",], ["34", "132", "Ian Fish", "38", "M", "Irmo", "SC", "26:23.2", "08:30.7",], ["35", "117", "Brady Andrews", "17", "M", "Lexington", "SC", "26:38.4", "08:35.6",], ["36", "22", "Ken McGregor", "52", "M", "Irmo", "SC", "27:07.3", "08:44.9",], ["37", "58", "Luke Naylor", "10", "M", "Irmo", "SC", "27:15.7", "08:47.6",], ["38", "28", "Joe Naylor", "42", "M", "Irmo", "SC", "27:16.0", "08:47.7",], ["39", "78", "Zachary Freeman", "13", "M", "Lexington", "SC", "27:19.7", "08:48.9",], ["40", "137", "Smith Hunter", "26", "M", "-", "SC", "28:16.6", "09:07.3",], ["41", "112", "Bryce Shealy", "16", "M", "Irmo", "SC", "28:17.7", "09:07.6",], ["42", "32", "Bobby Kirby", "42", "M", "Columbia", "SC", "28:21.3", "09:08.8",], ["43", "42", "Gavin Weiser", "28", "M", "Cayce", "SC", "28:24.3", "09:09.8",], ["44", "4", "James Hicks", "35", "M", "Jackson", "SC", "28:30.6", "09:11.8",], ["45", "54", "Jacob Gibson", "15", "M", "Irmo", "SC", "28:32.0", "09:12.3",], ["46", "104", "Benjamin Fryer", "16", "M", "Chapin", "SC", "28:45.2", "09:16.5",], ["47", "95", "Joseph Tamargo", "12", "M", "Irmo", "SC", "29:26.4", "09:29.8",], ["48", "93", "Alex Ponomarev", "64", "M", "Columbia", "SC", "29:39.3", "09:34.0",], ["49", "135", "George Stewart", "40", "M", "Lexington", "SC", "29:42.2", "09:34.9",], ["50", "134", "Henry Holt", "77", "M", "Lexington", "SC", "29:42.8", "09:35.1",], ["51", "39", "Steve Amodio", "52", "M", "IRMO", "SC", "29:44.2", "09:35.5",], ["52", "43", "Josh Dimuzio", "33", "M", "Irmo", "SC", "29:48.8", "09:37.0",], ["53", "60", "Mark Sheldon", "11", "M", "Columbia", "SC", "29:50.4", "09:37.5",], ["54", "139", "McLane Chris", "39", "M", "-", "SC", "31:15.3", "10:04.9",], ["55", "35", "David Johnson", "47", "M", "Irmo", "SC", "31:21.5", "10:06.9",], ["56", "7", "David Neubaum", "42", "M", "Columbia", "SC", "31:27.7", "10:08.9",], ["57", "126", "Jami Elder", "43", "M", "Sumter", "SC", "31:33.1", "10:10.7",], ["58", "40", "Chad Shivar", "40", "M", "Irmo", "SC", "32:06.9", "10:21.6",], ["59", "123", "Harry Strick", "59", "M", "Blythewood", "SC", "33:08.5", "10:41.5",], ["60", "131", "John Gasque", "53", "M", "Columbia", "SC", "34:04.7", "10:59.6",], ["61", "24", "Brian Bowen", "46", "M", "Irmo", "SC", "34:11.1", "11:01.6",], ["62", "69", "Hayden Stansbury", "13", "M", "Columbia", "SC", "34:25.7", "11:06.4",], ["63", "41", "Dave Duffy", "48", "M", "Irmo", "SC", "35:27.4", "11:26.3",], ["64", "21", "Barrett Isbell", "24", "M", "Lexington", "SC", "35:36.0", "11:29.0",], ["65", "138", "Poore Pete", "61", "M", "Columbia", "SC", "38:07.0", "12:17.7",], ["66", "102", "Paul Bates", "58", "M", "Lexington", "SC", "40:02.6", "12:55.0",], ["67", "133", "Jay Freeman", "42", "M", "Lexington", "SC", "41:04.4", "13:15.0",], ["68", "48", "Saverio Martin O'Toole10", "M", "Irmo", "SC", "41:50.8", "13:29.9",], ["69", "128", "Joseph Lorick", "40", "M", "Lexington", "SC", "43:17.2", "13:57.8",], ["70", "19", "Ernest Butler", "32", "M", "Irmo", "SC", "43:19.1", "13:58.4",], ["71", "96", "James Tamargo", "11", "M", "Irmo", "SC", "51:58.8", "16:46.1",], ["72", "92", "Joel Tamargo", "40", "M", "Irmo", "SC", "1:03:00", "20:19.4",], ["73", "98", "William Cody", "69", "M", "Columbia", "SC", "1:03:02", "20:20.0",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "55", "Hope Whisman", "15", "F", "Irmo", "SC", "20:23.0", "06:34.5",], ["2", "74", "Anna Johnson", "17", "F", "Irmo", "SC", "21:25.8", "06:54.8",], ["3", "103", "Janay Chisolm", "18", "F", "Columbia", "SC", "23:30.1", "07:34.9",], ["4", "77", "Hope Steger", "14", "F", "Irmo", "SC", "24:34.2", "07:55.5",], ["5", "76", "Sara Steger", "14", "F", "Irmo", "SC", "24:55.1", "08:02.3",], ["6", "114", "Brianna Hartley", "12", "F", "Irmo", "SC", "25:11.9", "08:07.7",], ["7", "51", "Marie Demetriades", "13", "F", "Irmo", "SC", "25:31.8", "08:14.1",], ["8", "33", "Sarah Blackwell", "37", "F", "Columbia", "SC", "25:32.1", "08:14.2",], ["9", "88", "Morgan Sox", "17", "F", "Irmo", "SC", "25:46.6", "08:18.9",], ["10", "119", "Paige Trent", "12", "F", "Columbia", "SC", "25:53.0", "08:21.0",], ["11", "140", "Denys Brenda", "14", "F", "Columbia", "SC", "26:15.8", "08:28.3",], ["12", "113", "Breanna Boyd", "15", "F", "Irmo", "SC", "26:39.1", "08:35.8",], ["13", "118", "Hannah Macon", "24", "F", "Columbia", "SC", "26:43.0", "08:37.1",], ["14", "141", "Rychener Shannon", "12", "F", "-", "SC", "26:59.4", "08:42.4",], ["15", "97", "Anna Jenkins", "12", "F", "Irmo", "SC", "27:29.0", "08:51.9",], ["16", "84", "Allee Cobb", "13", "F", "Columbia", "SC", "27:29.3", "08:52.0",], ["17", "46", "Margaret Lynn O'Toole13", "F", "Irmo", "SC", "27:29.7", "08:52.2",], ["18", "107", "Olivia Starnes", "12", "F", "Little Mountain", "SC", "27:44.0", "08:56.8",], ["19", "82", "Sydney Amodio", "16", "F", "IRMO", "SC", "27:45.1", "08:57.1",], ["20", "65", "Mackensie Barbee", "13", "F", "Columbia", "SC", "27:45.7", "08:57.3",], ["21", "71", "Lauren Devaney", "9", "F", "Irmo", "SC", "27:51.3", "08:59.1",], ["22", "108", "Anna Katherine Daley", "14", "F", "Columbia", "SC", "28:38.3", "09:14.3",], ["23", "81", "Zoe Aurednik", "12", "F", "Lexington", "SC", "28:39.2", "09:14.6",], ["24", "49", "Tonya Denys", "11", "F", "Irmo", "SC", "28:51.4", "09:18.5",], ["25", "61", "Anna Marie Blevins", "13", "F", "Lexington", "SC", "29:10.4", "09:24.6",], ["26", "66", "Lily Elmore", "13", "F", "Chapin", "SC", "29:12.0", "09:25.2",], ["27", "25", "Janet Bowen", "46", "F", "Irmo", "SC", "29:30.0", "09:31.0",], ["28", "31", "Christa Sheldon", "44", "F", "Columbia", "SC", "29:46.0", "09:36.1",], ["29", "44", "Denise Shelton", "32", "F", "Irmo", "SC", "29:49.3", "09:37.2",], ["30", "115", "Parker Andrews", "13", "F", "Lexington", "SC", "29:50.9", "09:37.7",], ["31", "94", "Maddie Crapps", "12", "F", "Irmo", "SC", "29:59.3", "09:40.4",], ["32", "47", "Mary Ann OToole", "12", "F", "Irmo", "SC", "31:14.8", "10:04.8",], ["33", "116", "Makenzie Andrews", "16", "F", "Lexington", "SC", "32:04.3", "10:20.7",], ["34", "13", "Annie Opseth", "25", "F", "Columbia", "SC", "32:18.9", "10:25.5",], ["35", "99", "Anna West", "32", "F", "Pelion", "SC", "32:21.3", "10:26.2",], ["36", "12", "Karalyn Miskie", "30", "F", "Chapin", "SC", "32:29.5", "10:28.9",], ["37", "109", "Elizabeth Daley", "12", "F", "Columbia", "SC", "32:48.0", "10:34.8",], ["38", "105", "Lauren Fryer", "14", "F", "Chapin", "SC", "33:22.5", "10:46.0",], ["39", "106", "Banks Fryer", "12", "F", "Chapin", "SC", "33:53.7", "10:56.0",], ["40", "83", "Mandy Kirkley", "12", "F", "Irmo", "SC", "35:16.8", "11:22.8",], ["41", "100", "Sara Sims", "37", "F", "West Columbia", "SC", "35:20.2", "11:23.9",], ["42", "23", "Stephanie Dukes", "39", "F", "Lexington", "SC", "35:22.0", "11:24.5",], ["43", "20", "Amanda Isbell", "24", "F", "Lexington", "SC", "36:08.8", "11:39.6",], ["44", "125", "Nancy Martin", "46", "F", "-", "Sumter", "SC", "36:57.5", "11:55.3",], ["45", "11", "Rebecca Spires", "23", "F", "Lexington", "SC", "37:09.6", "11:59.2",], ["46", "34", "Michele Bradley", "50", "F", "Irmo", "SC", "37:15.0", "12:01.0",], ["47", "10", "Tracy Spires", "51", "F", "Lexington", "SC", "38:14.7", "12:20.2",], ["48", "124", "Jessica Gonzalez", "32", "F", "Columbia", "SC", "38:41.6", "12:28.9",], ["49", "122", "Jennifer Tudor", "41", "F", "COLUMBIA", "SC", "39:30.1", "12:44.5",], ["50", "79", "Anna Freeman", "11", "F", "Lexington", "SC", "40:06.9", "12:56.4",], ["51", "50", "Jalesa Denys", "8", "F", "Irmo", "SC", "42:13.0", "13:37.1",], ["52", "16", "Kimberly Taylor", "41", "F", "Irmo", "SC", "42:18.4", "13:38.8",], ["53", "111", "Sadie Lorick", "9", "F", "Lexington", "SC", "42:27.8", "13:41.9",], ["54", "53", "Caitlin Mayne", "15", "F", "Columbia", "SC", "46:25.1", "14:58.4",], ["55", "80", "Kelli Tracy", "15", "F", "Blythewood", "SC", "49:29.6", "15:57.9",], ["56", "9", "Dina Mauldin", "41", "F", "Columbia", "SC", "49:30.2", "15:58.1",], ["57", "91", "Michelle Tamargo", "44", "F", "Irmo", "SC", "1:03:01", "20:19.7",], ["58", "5", "Morgan Lewis", "25", "F", "Lexington", "SC", "1:03:07", "20:21.6",], ["59", "6", "Courtney Smith", "32", "F", "Columbia", "SC", "1:04:31", "20:48.7",], ["60", "27", "Shrividya Narayanaswamy", "31", "F", "columbia", "SC", "1:04:35", "20:50.0",], ["61", "2", "Ellen Reddick", "44", "F", "Conyers", "GA", "1:04:50", "20:54.8",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "62", "Jonatdan Phipps", "14", "M", "Columbia", "SC", "19:53.0", "06:24.8",], ["2", "70", "Coleman Devaney", "12", "M", "Irmo", "SC", "23:50.1", "07:41.3",], ["3", "121", "Ammar Dossaji", "13", "M", "Irmo", "SC", "24:53.1", "08:01.6",], ["4", "59", "Lindsey Wilson", "14", "M", "Irmo", "SC", "25:45.8", "08:18.6",], ["5", "63", "Evan Fish", "13", "M", "Irmo", "SC", "26:22.8", "08:30.6",], ["6", "58", "Luke Naylor", "10", "M", "Irmo", "SC", "27:15.7", "08:47.6",], ["7", "78", "Zachary Freeman", "13", "M", "Lexington", "SC", "27:19.7", "08:48.9",], ["8", "95", "Joseph Tamargo", "12", "M", "Irmo", "SC", "29:26.4", "09:29.8",], ["9", "60", "Mark Sheldon", "11", "M", "Columbia", "SC", "29:50.4", "09:37.5",], ["10", "69", "Hayden Stansbury", "13", "M", "Columbia", "SC", "34:25.7", "11:06.4",], ["11", "48", "Saverio Martin O'Toole10", "M", "Irmo", "SC", "41:50.8", "13:29.9",], ["12", "96", "James Tamargo", "11", "M", "Irmo", "SC", "51:58.8", "16:46.1",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "57", "James Bowen", "16", "M", "Irmo", "SC", "19:36.4", "06:19.5",], ["2", "52", "Timothy Stafford", "17", "M", "Irmo", "SC", "19:52.6", "06:24.7",], ["3", "68", "Chris Davis", "17", "M", "Irmo", "SC", "20:15.7", "06:32.2",], ["4", "72", "Mark Bradley", "16", "M", "Irmo", "SC", "20:43.9", "06:41.3",], ["5", "120", "Caleb Trent", "15", "M", "Columbia", "SC", "20:44.3", "06:41.4",], ["6", "56", "Jackson McGregor", "17", "M", "Irmo", "SC", "20:58.5", "06:46.0",], ["7", "136", "Chalgren Alex", "15", "M", "-", "SC", "21:24.9", "06:54.5",], ["8", "87", "Andrew Herbst", "15", "M", "Irmo", "SC", "22:42.2", "07:19.4",], ["9", "73", "Michael Bradley", "17", "M", "Irmo", "SC", "22:46.1", "07:20.7",], ["10", "85", "Collin McKinnon", "16", "M", "Irmo", "SC", "22:54.3", "07:23.3",], ["11", "67", "Alec Elmore", "15", "M", "Chapin", "SC", "22:59.6", "07:25.0",], ["12", "64", "Karalyn Miskie", "15", "M", "Irmo", "SC", "24:45.5", "07:59.2",], ["13", "75", "Joshua Camp", "15", "M", "Irmo", "SC", "25:32.5", "08:14.4",], ["14", "110", "Vadim Lorick", "17", "M", "Lexington", "SC", "25:56.3", "08:22.0",], ["15", "117", "Brady Andrews", "17", "M", "Lexington", "SC", "26:38.4", "08:35.6",], ["16", "112", "Bryce Shealy", "16", "M", "Irmo", "SC", "28:17.7", "09:07.6",], ["17", "54", "Jacob Gibson", "15", "M", "Irmo", "SC", "28:32.0", "09:12.3",], ["18", "104", "Benjamin Fryer", "16", "M", "Chapin", "SC", "28:45.2", "09:16.5",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "21", "Barrett Isbell", "24", "M", "Lexington", "SC", "35:36.0", "11:29.0",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "129", "Daniel Tew", "27", "M", "Greenwood", "SC", "20:26.1", "06:35.5",], ["2", "130", "Bryce Harman", "26", "M", "Columbia", "SC", "23:53.7", "07:42.5",], ["3", "36", "Darrell Green", "29", "M", "Columbia", "SC", "24:11.5", "07:48.2",], ["4", "137", "Smith Hunter", "26", "M", "-", "SC", "28:16.6", "09:07.3",], ["5", "42", "Gavin Weiser", "28", "M", "Cayce", "SC", "28:24.3", "09:09.8",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "45", "Kenneth Ordonez", "33", "M", "Jackson Heights", "NY", "25:08.9", "08:06.7",], ["2", "43", "Josh Dimuzio", "33", "M", "Irmo", "SC", "29:48.8", "09:37.0",], ["3", "19", "Ernest Butler", "32", "M", "Irmo", "SC", "43:19.1", "13:58.4",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "38", "Keith Schmidt", "35", "M", "Columbia", "SC", "22:30.7", "07:15.7",], ["2", "3", "Franklin Walker", "36", "M", "Columbia", "SC", "25:16.7", "08:09.3",], ["3", "132", "Ian Fish", "38", "M", "Irmo", "SC", "26:23.2", "08:30.7",], ["4", "4", "James Hicks", "35", "M", "Jackson", "SC", "28:30.6", "09:11.8",], ["5", "139", "McLane Chris", "39", "M", "-", "SC", "31:15.3", "10:04.9",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "142", "Dobson Matt", "43", "M", "-", "SC", "19:07.1", "06:10.0",], ["2", "28", "Joe Naylor", "42", "M", "Irmo", "SC", "27:16.0", "08:47.7",], ["3", "32", "Bobby Kirby", "42", "M", "Columbia", "SC", "28:21.3", "09:08.8",], ["4", "135", "George Stewart", "40", "M", "Lexington", "SC", "29:42.2", "09:34.9",], ["5", "7", "David Neubaum", "42", "M", "Columbia", "SC", "31:27.7", "10:08.9",], ["6", "126", "Jami Elder", "43", "M", "Sumter", "SC", "31:33.1", "10:10.7",], ["7", "40", "Chad Shivar", "40", "M", "Irmo", "SC", "32:06.9", "10:21.6",], ["8", "133", "Jay Freeman", "42", "M", "Lexington", "SC", "41:04.4", "13:15.0",], ["9", "128", "Joseph Lorick", "40", "M", "Lexington", "SC", "43:17.2", "13:57.8",], ["10", "92", "Joel Tamargo", "40", "M", "Irmo", "SC", "1:03:00", "20:19.4",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "127", "Robert Daley", "48", "M", "Columbia", "SC", "21:15.8", "06:51.5",], ["2", "18", "Richard Stafford", "46", "M", "Irmo", "SC", "23:38.6", "07:37.6",], ["3", "1", "Wayne Shuler", "45", "M", "Irmo", "SC", "25:33.6", "08:14.7",], ["4", "35", "David Johnson", "47", "M", "Irmo", "SC", "31:21.5", "10:06.9",], ["5", "24", "Brian Bowen", "46", "M", "Irmo", "SC", "34:11.1", "11:01.6",], ["6", "41", "Dave Duffy", "48", "M", "Irmo", "SC", "35:27.4", "11:26.3",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "29", "Rick Gibbons", "53", "M", "Chapin", "SC", "25:27.0", "08:12.6",], ["2", "22", "Ken McGregor", "52", "M", "Irmo", "SC", "27:07.3", "08:44.9",], ["3", "39", "Steve Amodio", "52", "M", "Irmo", "SC", "29:44.2", "09:35.5",], ["4", "131", "John Gasque", "53", "M", "Columbia", "SC", "34:04.7", "10:59.6",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "101", "Geary McAlister", "55", "M", "Rock Hill", "SC", "22:23.8", "07:13.5",], ["2", "37", "Larry Bates", "55", "M", "Columbia", "SC", "25:00.4", "08:04.0",], ["3", "123", "Harry Strick", "59", "M", "Blythewood", "SC", "33:08.5", "10:41.5",], ["4", "102", "Paul Bates", "58", "M", "Lexington", "SC", "40:02.6", "12:55.0",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "93", "Alex Ponomarev", "64", "M", "Columbia", "SC", "29:39.3", "09:34.0",], ["2", "138", "Poore Pete", "61", "M", "Columbia", "SC", "38:07.0", "12:17.7",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "98", "William Cody", "69", "M", "Columbia", "SC", "1:03:02", "20:20.0",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "134", "Henry Holt", "77", "M", "Lexington", "SC", "29:42.8", "09:35.1",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "77", "Hope Steger", "14", "F", "Irmo", "SC", "24:34.2", "07:55.5",], ["2", "76", "Sara Steger", "14", "F", "Irmo", "SC", "24:55.1", "08:02.3",], ["3", "114", "Brianna Hartley", "12", "F", "Irmo", "SC", "25:11.9", "08:07.7",], ["4", "51", "Marie Demetriades", "13", "F", "Irmo", "SC", "25:31.8", "08:14.1",], ["5", "119", "Paige Trent", "12", "F", "Columbia", "SC", "25:53.0", "08:21.0",], ["6", "140", "Denys Brenda", "14", "F", "Columbia", "SC", "26:15.8", "08:28.3",], ["7", "141", "Rychener Shannon", "12", "F", "-", "SC", "26:59.4", "08:42.4",], ["8", "97", "Anna Jenkins", "12", "F", "Irmo", "SC", "27:29.0", "08:51.9",], ["9", "84", "Allee Cobb", "13", "F", "Columbia", "SC", "27:29.3", "08:52.0",], ["10", "46", "Margaret Lynn O'Toole", "13", "F", "Irmo", "SC", "27:29.7", "08:52.2",], ["11", "107", "Olivia Starnes", "12", "F", "Little Mountain", "SC", "27:44.0", "08:56.8",], ["12", "65", "Mackensie Barbee", "13", "F", "Columbia", "SC", "27:45.7", "08:57.3",], ["13", "71", "Lauren Devaney", "9", "F", "Irmo", "SC", "27:51.3", "08:59.1",], ["14", "108", "Anna Katherine Daley", "14", "F", "Columbia", "SC", "28:38.3", "09:14.3",], ["15", "81", "Zoe Aurednik", "12", "F", "Lexington", "SC", "28:39.2", "09:14.6",], ["16", "49", "Tonya Denys", "11", "F", "Irmo", "SC", "28:51.4", "09:18.5",], ["17", "61", "Anna Marie Blevins", "13", "F", "Lexington", "SC", "29:10.4", "09:24.6",], ["18", "66", "Lily Elmore", "13", "F", "Chapin", "SC", "29:12.0", "09:25.2",], ["19", "115", "Parker Andrews", "13", "F", "Lexington", "SC", "29:50.9", "09:37.7",], ["20", "94", "Maddie Crapps", "12", "F", "Irmo", "SC", "29:59.3", "09:40.4",], ["21", "47", "Mary Ann OToole", "12", "F", "Irmo", "SC", "31:14.8", "10:04.8",], ["22", "109", "Elizabeth Daley", "12", "F", "Columbia", "SC", "32:48.0", "10:34.8",], ["23", "105", "Lauren Fryer", "14", "F", "Chapin", "SC", "33:22.5", "10:46.0",], ["24", "106", "Banks Fryer", "12", "F", "Chapin", "SC", "33:53.7", "10:56.0",], ["25", "83", "Mandy Kirkley", "12", "F", "Irmo", "SC", "35:16.8", "11:22.8",], ["26", "79", "Anna Freeman", "11", "F", "Lexington", "SC", "40:06.9", "12:56.4",], ["27", "50", "Jalesa Denys", "8", "F", "Irmo", "SC", "42:13.0", "13:37.1",], ["28", "111", "Sadie Lorick", "9", "F", "Lexington", "SC", "42:27.8", "13:41.9",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "74", "Anna Johnson", "17", "F", "Irmo", "SC", "21:25.8", "06:54.8",], ["2", "103", "Janay Chisolm", "18", "F", "Columbia", "SC", "23:30.1", "07:34.9",], ["3", "88", "Morgan Sox", "17", "F", "Irmo", "SC", "25:46.6", "08:18.9",], ["4", "113", "Breanna Boyd", "15", "F", "Irmo", "SC", "26:39.1", "08:35.8",], ["5", "82", "Sydney Amodio", "16", "F", "Irmo", "SC", "27:45.1", "08:57.1",], ["6", "116", "Makenzie Andrews", "16", "F", "Lexington", "SC", "32:04.3", "10:20.7",], ["7", "53", "Caitlin Mayne", "15", "F", "Columbia", "SC", "46:25.1", "14:58.4",], ["8", "80", "Kelli Tracy", "15", "F", "Blythewood", "SC", "49:29.6", "15:57.9",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "118", "Hannah Macon", "24", "F", "Columbia", "SC", "26:43.0", "08:37.1",], ["2", "20", "Amanda Isbell", "24", "F", "Lexington", "SC", "36:08.8", "11:39.6",], ["3", "11", "Rebecca Spires", "23", "F", "Lexington", "SC", "37:09.6", "11:59.2",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "13", "Annie Opseth", "25", "F", "Columbia", "SC", "32:18.9", "10:25.5",], ["2", "5", "Morgan Lewis", "25", "F", "Lexington", "SC", "1:03:07", "20:21.6",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "44", "Denise Shelton", "32", "F", "Irmo", "SC", "29:49.3", "09:37.2",], ["2", "99", "Anna West", "32", "F", "Pelion", "SC", "32:21.3", "10:26.2",], ["3", "12", "Karalyn Miskie", "30", "F", "Chapin", "SC", "32:29.5", "10:28.9",], ["4", "124", "Jessica Gonzalez", "32", "F", "Columbia", "SC", "38:41.6", "12:28.9",], ["5", "6", "Courtney Smith", "32", "F", "Columbia", "SC", "1:04:31", "20:48.7",], ["6", "27", "Shrividya Narayanaswamy", "31", "F", "columbia", "SC", "1:04:35", "20:50.0",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "33", "Sarah Blackwell", "37", "F", "Columbia", "SC", "25:32.1", "08:14.2",], ["2", "100", "Sara Sims", "37", "F", "West Columbia", "SC", "35:20.2", "11:23.9",], ["3", "23", "Stephanie Dukes", "39", "F", "Lexington", "SC", "35:22.0", "11:24.5",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "31", "Christa Sheldon", "44", "F", "Columbia", "SC", "29:46.0", "09:36.1",], ["2", "122", "Jennifer Tudor", "41", "F", "Columbia", "SC", "39:30.1", "12:44.5",], ["3", "16", "Kimberly Taylor", "41", "F", "Irmo", "SC", "42:18.4", "13:38.8",], ["4", "9", "Dina Mauldin", "41", "F", "Columbia", "SC", "49:30.2", "15:58.1",], ["5", "91", "Michelle Tamargo", "44", "F", "Irmo", "SC", "1:03:01", "20:19.7",], ["6", "2", "Ellen Reddick", "44", "F", "Conyers", "GA", "1:04:50", "20:54.8",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "25", "Janet Bowen", "46", "F", "Irmo", "SC", "29:30.0", "09:31.0",], ["2", "125", "Nancy Martin", "46", "F", "Sumter", "SC", "36:57.5", "11:55.3",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
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
              <?php foreach (["Place", "Bib#", "Name", "Age", "S", "City", "St", "Time", "Pace",] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
              <?php endforeach; ?>
            </thead>
            <tbody>
              <?php foreach ([["1", "34", "Michele Bradley", "50", "F", "Irmo", "SC", "37:15.0", "12:01.0",], ["2", "10", "Tracy Spires", "51", "F", "Lexington", "SC", "38:14.7", "12:20.2",],] as $row): ?>
                    <tr>
                      <?php foreach ($row as $cell): ?>
                            <td><?= htmlspecialchars($cell) ?></td>
                      <?php endforeach; ?>
                    </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </li>
    </ul>
  </div>
<?php
require_once Values::FOOTER_INC;
