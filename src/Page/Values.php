<?php

namespace DutchForkRunners\Page;

class Values {
	const DEFAULT_COLOR = "006400";

	const ROOT_TITLE = "Dutch Fork Runners";

	const HEAD_INC = __DIR__ . "/Header/header.inc.php";
	const FOOTER_INC = __DIR__ . "/Footer/footer.inc.php";

	public static function createTitle(string $title, array $values = []): string {
		return preg_replace_callback("/{([^}]+)}/", function ($in) use ($values): string {
			return $values[$in[1]];
		}, $title);
	}

	public static function createTOC(array $items): string {
		$str = '<div class="pushpin toc"><ul class="browser-default">';
		foreach ($items as list($id, $name)) {
			$str .= '<li><p class="no-margin"><a href="#' . htmlspecialchars($id) . '">' . htmlspecialchars($name) . '</a></p></li>';
		}
		$str .= '</ul></div>';
		return $str;
	}

	public static function createInlineTOC(array $items): string {
		$str = '<h4>Table of Contents</h4><ul class="browser-default">';
		foreach ($items as list($id, $name)) {
			$str .= '<li><p class="flow-text no-margin"><a href="#' . htmlspecialchars($id) . '">' . htmlspecialchars($name) . '</a></p></li>';
		}
		$str .= '</ul>';
		return $str;
	}
}
