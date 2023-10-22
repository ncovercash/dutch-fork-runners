<?php

namespace DutchForkRunners\Page;

class UniversalFunctions {
	public static function createHeading(string $contents): string {
		return implode("\n", [
			'<div class="section no-bottom-padding">',
			self::createHeadingWithoutSection($contents),
			'<hr>',
			'</div>',
			''
		]);
	}
	public static function createHeadingWithoutSection(string $contents): string {
		return implode("\n", [
			'<h1 class="center header hide-on-small-only">' . $contents . '</h1>',
			'<h3 class="center header hide-on-med-and-up">' . $contents . '</h3>',
			''
		]);
	}
}
