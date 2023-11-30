<?php

define("EXEC_START_TIME", microtime(true));

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Controller.php';

spl_autoload_register("\\DutchForkRunners\\Controller::loadClass");

use \DutchForkRunners\Controller;

// Choose what error handling we want to do
if (Controller::isDevelMode()) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	ini_set('scream.enabled', 1);
} else {
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 0);
	ini_set('scream.enabled', 0);
}

// if (php_sapi_name() !== 'cli') {
// 	ob_start();
// }

require_once __DIR__ . "/vendor/autoload.php";

// register_shutdown_function("\\DutchForkRunners\\Controller::shutdown");
// set_error_handler("\\DutchForkRunners\\Controller::handleError", E_ALL);
// set_exception_handler("\\DutchForkRunners\\Controller::handleException");
