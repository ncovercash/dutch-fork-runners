<?php

namespace DutchForkRunners;


/**
 * Generic controller which handles things like error logging, autoloading, etc.
 */
class Controller {
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

	/**
	 * Return if the platform is in development mode
	 *
	 * @return bool If development mode is on
	 */
	public static function isDevelMode(): bool {
		return false;
	}
}
