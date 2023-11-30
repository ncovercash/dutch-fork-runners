<?php

namespace DutchForkRunners;

use \DutchForkRunners\HTTPCode;
use \DutchForkRunners\Page\{UniversalFunctions, Values};
use \Exception;
use \PDO;
use \Throwable;

/**
 * Generic controller which handles things like error logging, autoloading, etc.
 */
class Controller {
	const DEVEL = false;

	/**
	 * Autoloads classes, will be registered with spl_autoload_register
	 *
	 * @param string $name Name of class to attempt to load
	 */
	public static function loadClass(string $name): void {
		if (strpos($name, 'DutchForkRunners\\') === 0) {
			$unNamespaced = str_replace('DutchForkRunners\\', '', $name);
			$toPath = str_replace('\\', DIRECTORY_SEPARATOR, $unNamespaced) . ".php";
			if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $toPath)) {
				require_once __DIR__ . DIRECTORY_SEPARATOR . $toPath;
			}
		}
	}

	// /**
	//  * Generate a pretty trace - MAY CONTAIN SENSITIVE INFO
	//  *
	//  * @param bool $includeParams Whether or not to include function args
	//  * @return string[] pretty traceback
	//  */
	// public static function getTrace(bool $includeParams = true): array {
	// 	$trace = (new Exception())->getTrace();

	// 	$result = [];
	// 	foreach ($trace as $row) {
	// 		if (array_key_exists("file", $row) && $row["file"] == realpath(__FILE__)) {
	// 			continue;
	// 		}
	// 		$item = "";
	// 		if (array_key_exists("file", $row)) {
	// 			$item .= basename($row["file"]) . "";
	// 		}
	// 		if (array_key_exists("line", $row)) {
	// 			$item .= ":" . $row["line"];
	// 		}
	// 		$item .= " called ";
	// 		if (array_key_exists("class", $row)) {
	// 			$item .= $row["class"];
	// 		}
	// 		if (array_key_exists("type", $row)) {
	// 			$item .= $row["type"];
	// 		}
	// 		if (array_key_exists("function", $row)) {
	// 			$item .= $row["function"];
	// 		}
	// 		if (array_key_exists("args", $row) && $includeParams) {
	// 			$item .= "(";
	// 			foreach ($row["args"] as $key => $arg) {
	// 				try {
	// 					$item .= serialize($arg) . ", ";
	// 				} catch (Exception $e) {
	// 					$item .= "non-serializable" . ", ";
	// 				}
	// 			}
	// 			$item .= ")";
	// 		} else {
	// 			$item .= "(...)";
	// 		}
	// 		$result[] = $item;
	// 	}

	// 	return $result;
	// }

	// /**
	//  * Show error page
	//  *
	//  * @param int $errno Error number/code
	//  * @param string $errstr Error string/message
	//  * @param string $errfile File the error occured in
	//  * @param int $errline Line the error occured on
	//  * @param string $trackingId Unique tracking ID
	//  */
	// public static function send500Error(int $errno, string $errstr, string $errfile, int $errline, string $trackingId): void {
	// 	if (!headers_sent()) {
	// 		HTTPCode::set(500);
	// 	}
	// 	if (php_sapi_name() === 'cli') {
	// 		echo "An unexpected error occured!  Information:\n" .
	// 			"  ERRNO:      " . $errno . "\n" .
	// 			"  ERRSTR:     " . $errstr . "\n" .
	// 			"  ERRFILE:    " . $errfile . "\n" .
	// 			"  ERRLINE:    " . $errline . "\n" .
	// 			"  TRACK_ID:    " . $trackingId . "\n" .
	// 			"  ARGV:   " . implode(" | ", $_SERVER["argv"]) . "\n";
	// 		flush();
	// 		exit(1); // non-zero error codes
	// 	}
	// 	ob_clean(); // clean out output buffer, as we're about to show errors

	// 	// check constants are set
	// 	if (!defined("PAGE_COLOR")) {
	// 		define("PAGE_COLOR", Values::DEFAULT_COLOR);
	// 	}
	// 	if (!defined("PAGE_TITLE")) {
	// 		define("PAGE_TITLE", "Error!!1");
	// 	}
	// 	if (!defined("PAGE_KEYWORD")) {
	// 		define("PAGE_KEYWORD", "error");
	// 	}

	// 	if (headers_sent()) { // assume we already sent header, despite our OB attempts
	// 		echo '</div><div a=""></div></div></div></p></img></div></div><h3>An unexpected error occured.  Tracking ID: ' . $trackingId . '</h3></body></html>';
	// 	} else {
	// 		if (!defined("REAL_ROOTDIR")) {
	// 			define("REAL_ROOTDIR", __DIR__ . '/../'); // we can do this safely because we're only using stuff from this script, so no fuckery will be included
	// 		}

	// 		require Values::HEAD_INC;

	// 		echo '<div class="section center row">';
	// 		echo UniversalFunctions::createHeading('An unexpected error occured</h3>');
	// 		echo '<p class="flow-text no-bottom-margin">Tracking ID: <strong>' . $trackingId . '</strong></p>';
	// 		echo '<p class="flow-text no-top-margin">If you would please e-mail <a href="mailto:me@ncovercash.dev">me@ncovercash.dev</a> with the above tracking ID, what you were doing, and any other relevant information.</p>';

	// 		if (self::isDevelMode()) {
	// 			echo '<div class="code-block">';
	// 			echo '<p><strong>Development mode information:</strong></p>';
	// 			echo '<p></p>';
	// 			echo '<p>ERRNO: ' . htmlspecialchars($errno) . '</p>';
	// 			echo '<p>ERRSTR: ' . htmlspecialchars($errstr) . '</p>';
	// 			echo '<p>ERRFILE: ' . htmlspecialchars($errfile) . '</p>';
	// 			echo '<p>ERRLINE: ' . htmlspecialchars($errline) . '</p>';
	// 			echo '<p>TRACK_ID: ' . htmlspecialchars($trackingId) . '</p>';
	// 			echo '<p></p>';
	// 			echo '<p>Common mistakes (in self-hosting):</p>';
	// 			$version = explode(".", phpversion());
	// 			$vid = ($version[0] * 10000 + $version[1] * 100 + $version[2]);
	// 			echo '<p>PHP VERSION (>=7.2): ' . ($vid >= 70200 ? "YES" : "NO") . '</p>';
	// 			echo '<p>PDO exists: ' . (class_exists("\\PDO") ? "YES" : "NO") . '</p>';
	// 			echo '<p>MySQL PDO: ' . (in_array("mysql", PDO::getAvailableDrivers()) ? "YES" : "NO") . '</p>';
	// 			echo '</div>';

	// 			echo '<div class="code-block">';
	// 			echo '<p><strong>Server/host information:</strong></p>';
	// 			echo '<p></p>';
	// 			echo '<p>Host: ' . htmlspecialchars(array_key_exists("HTTP_HOST", $_SERVER) ? $_SERVER["HTTP_HOST"] : "unknown") . '</p>';
	// 			echo '<p>Device: ' . htmlspecialchars(array_key_exists("HTTP_USER_AGENT", $_SERVER) ? $_SERVER["HTTP_USER_AGENT"] : "unknown") . '</p>';
	// 			echo '<p>Cookies: ' . htmlspecialchars(array_key_exists("HTTP_COOKIE", $_SERVER) ? $_SERVER["HTTP_COOKIE"] : "unknown") . '</p>';
	// 			echo '<p>Scheme: ' . htmlspecialchars(array_key_exists("REQUEST_SCHEME", $_SERVER) ? $_SERVER["REQUEST_SCHEME"] : "unknown") . '</p>';
	// 			echo '<p>Protocol: ' . htmlspecialchars(array_key_exists("SERVER_PROTOCOL", $_SERVER) ? $_SERVER["SERVER_PROTOCOL"] : "unknown") . '</p>';
	// 			echo '<p>Method: ' . htmlspecialchars(array_key_exists("REQUEST_METHOD", $_SERVER) ? $_SERVER["REQUEST_METHOD"] : "unknown") . '</p>';
	// 			echo '<p>Requested at: ' . htmlspecialchars(array_key_exists("REQUEST_TIME_FLOAT", $_SERVER) ? $_SERVER["REQUEST_TIME_FLOAT"] : "unknown") . '</p>';
	// 			echo '<p>TLS: ' . htmlspecialchars(array_key_exists("HTTPS", $_SERVER) && $_SERVER["HTTPS"] == "on" ? "YES" : "NO") . '</p>';
	// 			echo '<p>Referrer: ' . htmlspecialchars(array_key_exists("HTTP_REFERER", $_SERVER) ? $_SERVER["HTTP_REFERER"] : "unknown") . '</p>';
	// 			echo '<p>X_Requester: ' . htmlspecialchars(array_key_exists("HTTP_X_REQUESTED_WITH", $_SERVER) ? $_SERVER["HTTP_X_REQUESTED_WITH"] : "unknown") . '</p>';
	// 			echo '<p>Remote: ' . htmlspecialchars(array_key_exists("REMOTE_ADDR", $_SERVER) ? $_SERVER["REMOTE_ADDR"] : "unknown") . ':' . htmlspecialchars(array_key_exists("REMOTE_PORT", $_SERVER) ? $_SERVER["REMOTE_PORT"] : "unknown") . '</p>';
	// 			echo '<p>argv: ' . htmlspecialchars(array_key_exists("ARGV", $_SERVER) ? $_SERVER["ARGV"] : "unknown") . '</p>';
	// 			echo '<p></p>';
	// 			echo '<p>PHP Version: ' . htmlspecialchars(phpversion()) . '</p>';
	// 			echo '</div>';
	// 		}

	// 		echo '</div>';

	// 		require Values::FOOTER_INC;

	// 		ob_flush();
	// 		flush();
	// 		die();
	// 	}
	// }

	// /**
	//  * set_error_handler function
	//  *
	//  * @param int $errno Error number/code
	//  * @param string $errstr Error string/message
	//  * @param string $errfile File the error occured in
	//  * @param int $errline Line the error occured on
	//  * @return bool Whether or not the handler worked
	//  */
	// public static function handleError(int $errno, string $errstr, string $errfile, int $errline): bool {
	// 	file_put_contents(REAL_ROOTDIR . "error_log", json_encode(func_get_args(), JSON_PRETTY_PRINT) . "\0\x\07\n", FILE_APPEND);
	// 	$trackingId = ((string) time()) . "-" . $errno . "-" . md5($errstr . $errfile . $errline) . "-" . uniqid();
	// 	switch ($errno) {
	// 		case E_NOTICE:
	// 		case E_USER_NOTICE:
	// 		case E_STRICT:
	// 		case E_DEPRECATED:
	// 		case E_USER_DEPRECATED:
	// 			return true;
	// 		case E_ERROR:
	// 		case E_WARNING:
	// 		case E_PARSE:
	// 		case E_CORE_ERROR:
	// 		case E_CORE_WARNING:
	// 		case E_COMPILE_ERROR:
	// 		case E_COMPILE_WARNING:
	// 		case E_USER_ERROR:
	// 		case E_USER_WARNING:
	// 		case E_RECOVERABLE_ERROR:
	// 		default:
	// 			break;
	// 	}
	// 	self::send500Error($errno, $errstr, $errfile, $errline, $trackingId);
	// 	return true;
	// }

	// /**
	//  * Handles a PHP exception, will just trigger a USER_ERROR for the above handleError to deal with
	//  *
	//  * @param Throwable|null $e Exception/error to be handled
	//  */
	// public static function handleException(?Throwable $e): void {
	// 	if (is_null($e)) {
	// 		return;
	// 	}
	// 	self::handleError(E_ERROR, $e->getMessage(), $e->getFile(), $e->getLine());
	// }

	// /**
	//  * Called via register_shutdown_function, should flush OB
	//  */
	// public static function shutdown(): void {
	// 	if (php_sapi_name() !== 'cli') {
	// 		ob_end_flush();
	// 	}
	// }

	/**
	 * Return if the platform is in development mode
	 *
	 * @return bool If development mode is on
	 */
	public static function isDevelMode(): bool {
		return self::DEVEL;
	}
}
