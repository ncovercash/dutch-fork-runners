<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "contact");
define("PAGE_TITLE", "Contact");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Contact");

$ios = str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), "ipod") || str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), "iphone") || str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), "ipad");
$android = str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), "android");

?>
<div class="col s12"><a href="sms:81010<?= $android ? "?" : "&" ?>body=@dfrunners" class="black-text">
    <h2 class="center"><i class="medium material-icons">sms</i></h2>
    <h2 class="header center">Receive SMS Alerts</h2>
    <h3 class="header center">Text "@dfrunners" to 81010</h3>
    <h4 class="header center">Group is cleared each April so please rejoin</h4>
  </a>
</div>
</div>
<div class="divider"></div>
<div class="section">
  <div class="row">
    <div class="col s12 m6">
      <a class="black-text" href="mailto:dutchforkrunners@gmail.com">
        <div class="icon-block">
          <h2 class="center"><i class="medium fas fa-envelope" alt="envelope" aria-hidden="true"></i></h2>
          <h4 class="center">Email</h4>

          <h5 class="light center">dutchforkrunners@gmail.com</h5>
        </div>
      </a>
    </div>
    <div class="col s12 m6">
      <a class="black-text" href="//www.facebook.com/Dutch-Fork-Runners-160376340641014/">
        <div class="icon-block">
          <h2 class="center"><i class="medium fab fa-facebook-square" alt="facebook" aria-hidden="true"></i></h2>
          <h4 class="center">Facebook</h4>

          <h5 class="light center">Click here</h5>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m6">
      <a class="black-text" href="//instagram.com/dutchforkrunners/">
        <div class="icon-block">
          <h2 class="center"><i class="medium fab fa-instagram" alt="instagram" aria-hidden="true"></i></h2>
          <h4 class="center">Instagram</h4>

          <h5 class="light center">@dutchforkrunners</h5>
        </div>
      </a>
    </div>
    <div class="col s12 m6">
      <a class="black-text" href="//twitter.com/dfrunners">
        <div class="icon-block">
          <h2 class="center"><i class="medium fab fa-twitter" alt="twitter" aria-hidden="true"></i></h2>
          <h4 class="center">Twitter</h4>

          <h5 class="light center">@dfrunners</h5>
        </div>
      </a>
    </div>
  </div>
</div>
</div>
<?php
require_once Values::FOOTER_INC;
