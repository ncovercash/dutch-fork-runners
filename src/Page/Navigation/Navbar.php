<?php

namespace DutchForkRunners\Page\Navigation;

/**
 * Holds constants and functions for navigation bar things
 */
class Navbar
{
	// whether or not the item is a name, or should be called
	public const NAME = 0;
	public const CALLABLE = 1;

	// type of navbar item
	public const NORMAL_LINK = 1;
	public const DROPDOWN_PARENT = 2;
	public const DROPDOWN_CHILD = 3;
	public const DROPDOWN_DIVIDER = 4;
	public const PSUEDO_DROPDOWN_END = 5;

	// if the bar this item is a part of is sidebar or navbar, used for callable
	public const NAVBAR = 0;
	public const SIDENAV = 1;

	// html for the logo in the top left/center
	public const LOGO_HTML = '
  <img alt="logo" class="hide-on-small-only" height="60" src="' . ROOTDIR . 'img/cc-arrow-white.png" style="margin-top: 2px;"/>
  <img alt="logo" class="hide-on-med-and-up" height="54" src="' . ROOTDIR . 'img/cc-arrow-white.png" style="margin-top: 1px;"/>
  ';

	/**
	 * Get all possible navbar items
	 *
	 * @return array[][]
	 */
	private static function getItems(): array
	{
		// outermost key is access level
		// inner arr is: name|callable, name|callable flag, keyword, path, type, [flags]
		return [
			"all" => [
				["Home", self::NAME, "home", ROOTDIR, self::NORMAL_LINK],
				["Calendar", self::NAME, "calendar", ROOTDIR . "Calendar", self::NORMAL_LINK],
				["Booster Club", self::NAME, "booster-club", ROOTDIR . "BoosterClub", self::NORMAL_LINK],
				["Handbook", self::NAME, "handbook", ROOTDIR . "Handbook", self::NORMAL_LINK],
				["Join", self::NAME, "join", ROOTDIR . "Join", self::NORMAL_LINK],
				["Misc Info", self::NAME, "misc", ROOTDIR . "Misc", self::NORMAL_LINK],
				["Contact", self::NAME, "contact", ROOTDIR . "Contact", self::NORMAL_LINK],
				["Records", self::NAME, "records", ROOTDIR . "Records", self::NORMAL_LINK],
				["SFTR", self::NAME, "sftr", ROOTDIR . "SFTR", self::NORMAL_LINK],
				["Gallery", self::NAME, "gallery", ROOTDIR . "Gallery", self::NORMAL_LINK],
			],
		];
	}

	/**
	 * Get navbar items for the current state
	 *
	 * @param string[] $perms Permissions to use to get navbar items
	 * @return array[][] Navbar items
	 */
	public static function getNavbarItems(array $perms = ["all"]): array
	{
		$items = array_filter(self::getItems(), function ($in) use ($perms) {
			return in_array($in, $perms);
		}, ARRAY_FILTER_USE_KEY);

		$items = array_merge(...array_values($items));

		return $items;
	}

	/**
	 * Get the navbar item text/contents
	 *
	 * @param int $bar Navbar type, see class constants
	 * @param array $navbarItem navbar item array, see spec in getNavbarItems
	 * @return string html-ready contents
	 */
	public static function getNavbarItemLabel(int $bar, array $navbarItem): string
	{
		return $navbarItem[1] == self::CALLABLE ? call_user_func($navbarItem[0], $bar) : htmlspecialchars($navbarItem[0]);
	}
}
