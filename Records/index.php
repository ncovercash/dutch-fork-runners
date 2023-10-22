<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "records");
define("PAGE_TITLE", "Records");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Records");

$records = [
	"Boys" => [
		"Jumps" => [
			"header" => [
				"Event",
				"Distance",
				"Name",
				"Year",
			],
			"data" => [
				[
					"High Jump",
					"7'2.25\"",
					"B.J. Cone",
					"1998",
				],
				[
					"Triple Jump",
					"46'5\"",
					"Vic Collins",
					"1995",
				],
				[
					"Long Jump",
					"23'10.5\"",
					"Phillipe Williams",
					"2012",
				],
			],
		],
		"Shot Put/Discus" => [
			"header" => [
				"Event",
				"Distance",
				"Name",
				"Year",
			],
			"data" => [
				[
					"Shot Put",
					"55'10.5\"",
					"David Sutton",
					"2012",
				],
				[
					"Discus",
					"170'4\"",
					"Auntrell Mack",
					"2013",
				],
			],
		],
		"Pole Vault" => [
			"header" => [
				"Event",
				"Height",
				"Name",
				"Year",
			],
			"data" => [
				[
					"Pole Vault",
					"15'6\"",
					"Trey Bell",
					"2001",
				],
			],
		],
		"Hurdles" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"110 Hurdles",
					"14.72",
					"Chico Brunson",
					"2008",
				],
				[
					"400 Hurdles",
					"58.3",
					"J.J. Locket",
					"2006",
				],
			],
		],
		"Sprint Events" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"100 metre Dash",
					"10.7",
					"Mark Quattlebaum",
					"2001",
				],
				[
					"200 metre Dash",
					"21.69",
					"Austin Conner",
					"2015",
				],
				[
					"400 metre Dash",
					"48.38",
					"Mark Quattlebaum",
					"2001",
				],
			],
		],
		"Distance Events" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"800 meters",
					"1:57.05",
					"Jack Mensch",
					"2019",
				],
				[
					"1600 meters",
					"4:13.76",
					"Roland Hakes",
					"2012",
				],
				[
					"Mile Run",
					"4:22.46",
					"Roland Hakes",
					"2012",
				],
				[
					"3000 meters",
					"11:04.10",
					"Coleman Devaney",
					"2014",
				],
				[
					"3200 meters",
					"9:26.83",
					"Roland Hakes",
					"2011",
				],
				[
					"5000 meters",
					"15:10",
					"Roland Hakes",
					"2011",
				],
			],
		],
		"Relays" => [
			"header" => [
				"Event",
				"Time",
				"Names",
				"Year",
			],
			"data" => [
				[
					"4x100 Relay",
					"41.81",
					"Jordan Berry\nMatt Colburn\nAustin Conner\nJordan Chisolm",
					"2013",
				],
				[
					"4x200 Relay",
					"1:34.52",
					"-",
					"2014",
				],
				[
					"4x400 Relay",
					"3:20.48",
					"Blake Ellis\nMark Bradley\nMyron White\nAustin Conner",
					"2015",
				],
				[
					"4x800 Relay",
					"8:01.71",
					"Matt Baker\nBritt Means\nJermaine Cooper\nBlake Means",
					"2002",
				],
				[
					"4x1600 Relay",
					"20:20.0",
					"Jackson Jordan\nKen Vowles\nJackson McGregor\nAvery Dominick",
					"2014",
				],
			],
		],
		"Medleys" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"1600 Sprint Medley\n200, 200, 400, 800",
					"3:45.90",
					"-",
					"2008",
				],
				[
					"800 Sprint Medley\n100, 100, 200, 400",
					"1:49.28",
					"-",
					"2010",
				],
				[
					"Distance Medley\n800, 400, 1200, 1600",
					"11:30.61",
					"Mark Bradley\nChris Davis\nJames Bowen\nAvery Dominick",
					"2014",
				],
			],
		],
	],
	"Girls" => [
		"Jumps" => [
			"header" => [
				"Event",
				"Distance",
				"Name",
				"Year",
			],
			"data" => [
				[
					"High Jump",
					"5'8\"",
					"Taina LaPorte",
					"2009",
				],
				[
					"Triple Jump",
					"39'4\"",
					"Taina LaPorte",
					"2009",
				],
				[
					"Long Jump",
					"17'8\"",
					"Laverne Piper",
					"2006",
				],
			],
		],
		"Shot Put/Discus" => [
			"header" => [
				"Event",
				"Distance",
				"Name",
				"Year",
			],
			"data" => [
				[
					"Shot Put",
					"41'1.25\"",
					"Alaina Coates",
					"2013",
				],
				[
					"Discus",
					"120'9\"",
					"Vivian Osuji",
					"2013",
				],
			],
		],
		"Pole Vault" => [
			"header" => [
				"Event",
				"Height",
				"Name",
				"Year",
			],
			"data" => [
				[
					"Pole Vault",
					"10'0\"",
					"Paige Lawson",
					"2013",
				],
			],
		],
		"Hurdles" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"100 Hurdles",
					"14.41",
					"Taina LaPorte",
					"2009",
				],
				[
					"400 Hurdles",
					"1:08.62",
					"Rashonda Venyah",
					"2004",
				],
			],
		],
		"Sprint Events" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"100 metre Dash",
					"11.88",
					"Rebekah Smith",
					"2015",
				],
				[
					"200 metre Dash",
					"25.13",
					"Raveen Golston",
					"2012",
				],
				[
					"400 metre Dash",
					"57.58",
					"Ebony Muller",
					"2005",
				],
			],
		],
		"Distance Events" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"800 meters",
					"2:17.19",
					"Taylor Quindlen",
					"2010",
				],
				[
					"1600 meters",
					"5:08.09",
					"Niki Klasnic",
					"2009",
				],
				[
					"Mile Run",
					"5:19.98",
					"Niki Klasnic",
					"2009",
				],
				[
					"3200 meters",
					"10:51.51",
					"Anna Johnson",
					"2014",
				],
				[
					"5000 meters",
					"18:15.48",
					"Anna Johnson",
					"2014",
				],
			],
		],
		"Relays" => [
			"header" => [
				"Event",
				"Time",
				"Names",
				"Year",
			],
			"data" => [
				[
					"4x100 Relay",
					"47.81",
					"Traci Drayton\nDakota Alston\nMaya Pringle\nRebekah Smith",
					"2015",
				],
				[
					"4x200 Relay",
					"1:53.58",
					"Catera Sweeney\nTraci Drayton\nTyra Fulton\nAnayah Barber",
					"2014",
				],
				[
					"4x400 Relay",
					"3:57.24",
					"-",
					"2004",
				],
				[
					"4x800 Relay",
					"9:40.54",
					"Amelia Syfert\nHaley Saxby\nJen Quindlen\nTaylor Quindlen",
					"2011",
				],
				[
					"4x1600 Relay",
					"23:21.0",
					"Anna Jenkins\nBri Hartley\nMia Perry\nAnna Jonson",
					"2014",
				],
			],
		],
		"Medleys" => [
			"header" => [
				"Event",
				"Time",
				"Name",
				"Year",
			],
			"data" => [
				[
					"1600 Sprint Medley\n200, 200, 400, 800",
					"4:38.09",
					"Dakota Alston\nAshlynn Solomon\nRashida Williamson\nHope Steger",
					"2014",
				],
				[
					"800 Sprint Medley\n100, 100, 200, 400",
					"1:57.07",
					"Lexy Sanders\nRebekah Smith\nMaya Pringle\nDakota Alston",
					"2014",
				],
				[
					"Distance Medley\n800, 400, 1200, 1600",
					"13:34.10",
					"Mia Perry\nCarrigan Mattison\nSara Steger\nAnna Johnson",
					"2014",
				],
			],
		],
	],
];
?>
<div class="divider"></div>
<p class="flow-text center">A work in progress. These records were pulled from scrunners and athletic.net.
	If you have any corrections, please <a href="mailto:dutchforkrunners@gmail.com">email us</a> with official
	verification,
	such as a website or newspaper listing. With changes in the accuracy of
	timing over the last several years, some older records may not be as accurate as they seem</h3>

<div class="section">
	<div class="row">
		<?php foreach ($records as $group => $categories): ?>
			<div class="col s12 l6">
				<ul class="collapsible popout" data-collapsible="expandable">
					<h3>
						<?= htmlspecialchars($group) ?>
					</h3>

					<?php foreach ($categories as $category => $data): ?>
						<li>
							<div class="collapsible-header">
								<?= $category ?>
							</div>
							<div class="collapsible-body">
								<table class="responsive-table highlight bordered">
									<thead>
										<tr>
											<?php foreach ($data["header"] as $head): ?>
												<th>
													<?= $head ?>
												</th>
											<?php endforeach; ?>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($data["data"] as $row): ?>
											<tr>
												<?php foreach ($row as $cell): ?>
													<td>
														<?= str_replace("\n", "<br>", htmlspecialchars($cell)) ?>
													</td>
												<?php endforeach; ?>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php
require_once Values::FOOTER_INC;
