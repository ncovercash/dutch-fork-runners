<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "booster-club");
define("PAGE_TITLE", "Finish Line Club");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("DFXC Finish Line Club");

?>
<h4 class="center">Please check the FLC's social media for latest information</h4>
<div class="row">
	<div class="col s12 m6">
		<div class="icon-block">
			<h2 class="center"><i class="medium fas fa-envelope" alt="envelope" aria-hidden="true"></i></h2>
			<h4 class="center">Email</h4>

			<h5 class="light center"><a class="black-text" href="mailto:dfxcflc@gmail.com">dfxcflc@gmail.com</a></h5>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="icon-block">
			<h2 class="center"><i class="medium fab fa-twitter" alt="twitter" aria-hidden="true"></i></h2>
			<h4 class="center">Twitter</h4>

			<h5 class="light center"><a class="black-text" href="//twitter.com/dfxcflc">@dfxcflc</a></h5>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12 m6">
		<div class="icon-block">
			<h2 class="center"><i class="medium fab fa-instagram" alt="instagram" aria-hidden="true"></i></h2>
			<h4 class="center">Instagram</h4>

			<h5 class="light center"><a class="black-text" href="//instagram.com/dfxcflc/">@dfxcflc</a></h5>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="icon-block">
			<h2 class="center"><i class="medium fab fa-facebook-square" alt="facebook" aria-hidden="true"></i></h2>
			<h4 class="center">Facebook</h4>

			<h5 class="light center">
				<a class="black-text" href="//www.facebook.com/Dutch-Fork-Runners-Finish-Line-Club-915286938597158">Click
					here</a>
			</h5>
		</div>
	</div>
</div>
<?php
require_once Values::FOOTER_INC;
