<?php
use \DutchForkRunners\Page\Header\Header;
use \DutchForkRunners\Page\{UniversalFunctions, Values};

?>
<!DOCTYPE html>
<html data-rootdir="<?= ROOTDIR ?>" lang="en">

<head>
	<meta charset="utf-8" /><!-- must be in the first 1024 bytes yada yada -->

	<title>
		<?= htmlspecialchars(PAGE_TITLE) ?> |
		<?= Values::ROOT_TITLE ?>
	</title>

	<?php foreach (Header::getScripts() as $script): ?>
		<script src="<?= $script[0] ?>" <?= trim(" " . implode(" ", array_slice($script, 1))) ?>></script>
	<?php endforeach; ?>

	<?php foreach (Header::getStyles() as $style): ?>
		<link href="<?= $style[0] ?>" rel="stylesheet" <?= trim(" " . implode(" ", array_slice($style, 1))) ?> />
	<?php endforeach; ?>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport" />
	<meta name="description" content="Home of the Dutch Fork High School cross country team!" />
	<meta name="keywords" content="DFHS, Dutch Fork High School, Cross Country" />
	<meta name="subject" content="DFHS, Dutch Fork High School, Cross Country" />
	<meta name="copyright" content="School District Five of Lexington and Richland Counties, Noah Overcash" />
	<meta name="language" content="EN" />
	<meta name="robots" content="index,follow" />
	<meta name="author"
		content="School District Five of Lexington and Richland Counties, Noah Overcash, blindler@lexrich5.org" />
	<meta name="designer" content="Noah Overcash" />
	<meta name="reply-to" content="blindler@lexrich5.org" />
	<meta name="theme-color" content="#0e4b2a" />

	<!-- Apple -->
	<meta name="apple-mobile-web-app-title" content="DF CC" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link href="https://dutchforkrunners.com/img/logo_square_medium.png" rel="apple-touch-icon" type="image/png" />
	<link href="https://dutchforkrunners.com/img/logo_square_medium.png" rel="apple-touch-icon-precomposed"
		type="image/png" />
	<link href="https://dutchforkrunners.com/img/logo_square_medium.png" rel="apple-touch-icon" type="image/png" />
	<link href="https://dutchforkrunners.com/img/logo_square_medium.png" rel="apple-touch-icon-precomposed"
		type="image/png" />
	<link rel="mask-icon" href="https://dutchforkrunners.com/img/logo_square_medium.png" color="green" />

	<!-- IE -->
	<meta name="msapplication-tooltip" content="Dutch Fork HS Cross Country" />
	<meta http-equiv="Page-Enter" content="RevealTrans(Duration=2,Transition=2)" />
	<meta http-equiv="Page-Exit" content="RevealTrans(Duration=3,Transition=12)" />
	<meta name="mssmarttagspreventparsing" content="true" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta name="msapplication-starturl" content="https://dutchforkrunners.com/" />
	<meta name="msapplication-window" content="width=800;height=600" />
	<meta name="msapplication-navbutton-color" content="green" />
	<meta name="application-name" content="Dutch Fork Runners" />

	<!-- win 8+ -->
	<meta name="application-name" content="Dutch Fork Runners" />
	<meta name="msapplication-TileColor" content="#0e4b2a" />
	<meta name="msapplication-square70x70logo" content="img/logo_square_medium.png" />

	<!-- opengraph -->
	<meta property="og:title" content="<?= htmlspecialchars(PAGE_TITLE) ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://dutchforkrunners.com/img/logo_square_medium.png" />
	<meta property="og:description" content="Home of the Dutch Fork High School cross country team" />
	<meta property="og:site_name" content="Dutch Fork Runners" />
	<meta property="og:locale" content="en_US" />

	<!-- twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?= htmlspecialchars(PAGE_TITLE) ?> | Dutch Fork Runners" />
	<meta name="twitter:description" content="Home of the Dutch Fork High School cross country team!" />
	<meta property="twitter:image" content="https://dutchforkrunners.com/img/logo_square_medium.png" />

	<!-- link tags -->
	<link rel='shortcut icon' type='image/png' href='https://dutchforkrunners.com/img/logo_square_medium.png' />
	<link rel='fluid-icon' type='image/png' href='https://dutchforkrunners.com/img/logo_square_medium.png' />
	<link rel="image_src" href="https://dutchforkrunners.com/img/logo_square_medium.png" type="image/png" />
</head>

<body>
	<?php require REAL_ROOTDIR . "src/Page/Navigation/navbar.inc.php"; ?>
	<div class="container">
