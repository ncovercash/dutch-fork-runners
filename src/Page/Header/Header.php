<?php

namespace DutchForkRunners\Page\Header;

use DutchForkRunners\Controller;

/**
 * Used to hold data about what scripts and other resources should belong in the <head> element
 */
class Header
{
	const PRODUCTION = 0;
	const DEVEL = 1;
	const ALWAYS = 2;

	/**
	 * JS libraries n such
	 */
	public const SCRIPTS = [
		// use minified versions in production
		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js", 'crossorigin="anonymous"'],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", 'crossorigin="anonymous"'],

		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.1/js/materialize.js", 'crossorigin="anonymous"'],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.1/js/materialize.min.js", 'crossorigin="anonymous"'],

		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.js", 'crossorigin="anonymous"'],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js", 'crossorigin="anonymous"'],

		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js", 'crossorigin="anonymous"'],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js", 'crossorigin="anonymous"'],

		[self::DEVEL, "https://rawgit.com/fullcalendar/fullcalendar/v3.7.0/dist/gcal.js", 'crossorigin="anonymous"'],
		[self::PRODUCTION, "https://cdn.rawgit.com/fullcalendar/fullcalendar/v3.7.0/dist/gcal.js", 'crossorigin="anonymous"'],

		[self::ALWAYS, ROOTDIR . "js/markdown_parser.js?v", "defer"],
		[self::ALWAYS, ROOTDIR . "js/onload.js?y"],
	];

	/**
	 * Get the scripts and attributes
	 * @return string[][]
	 */
	public static function getScripts(): array
	{
		$scripts = [];
		foreach (self::SCRIPTS as $script) {
			switch ($script[0]) {
				case self::PRODUCTION: // production only
					if (Controller::isDevelMode()) {
						continue 2;
					}
					break;
				case self::DEVEL: // devel only
					if (!Controller::isDevelMode()) {
						continue 2;
					}
					break;
				case self::ALWAYS:
					break;
			}
			$scripts[] = array_slice($script, 1);
		}
		return $scripts;
	}

	/**
	 * CSS-es
	 */
	public const STYLES = [
		// materialize main
		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.1/css/materialize.css"],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.1/css/materialize.min.css"],

		// icon set + robotos
		[self::ALWAYS, "https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i"],
		[self::ALWAYS, "https://fonts.googleapis.com/css?family=Material+Icons"],

		[self::ALWAYS, "https://use.fontawesome.com/releases/v5.0.13/css/all.css"],

		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"],

		[self::DEVEL, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css", 'media="anonymous"'],
		[self::PRODUCTION, "https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.min.css", 'media="anonymous"'],

		// overall styles and such, mostly just small things
		[self::ALWAYS, ROOTDIR . "css/overall.css?v"],
	];

	/**
	 * Get the styles
	 * @return string[]
	 */
	public static function getStyles(): array
	{
		$styles = [];
		foreach (self::STYLES as $style) {
			switch ($style[0]) {
				case self::PRODUCTION: // production only
					if (Controller::isDevelMode()) {
						continue 2;
					}
					break;
				case self::DEVEL: // devel only
					if (!Controller::isDevelMode()) {
						continue 2;
					}
					break;
				case self::ALWAYS:
					break;
			}
			$styles[] = array_slice($style, 1);
		}
		return $styles;
	}
}
