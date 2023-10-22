<?php

namespace DutchForkRunners;

/**
 * A class which facilitates generation of (potentially unique) tokens
 */
class Tokens {
	// characters which nacan be made into tokens
	// [a-z0-9]
	public const TOKEN_CHARS = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
	public const TOKEN_REGEX = '^[a-z0-9]*$';

	/**
	 * Generate a psuedorandom token
	 *
	 * This uses the Mersenne Twister algorithm (underlying for array_rand), which is secure enough
	 * and a psuedo-random enough number
	 * @param int $length
	 * @return string generated token
	 */
	public static function generateToken(int $length): string {
		return self::generateTokenFromCharset($length, self::TOKEN_CHARS);
	}

	/**
	 * Generate a psuedorandom token from a given list of characters
	 *
	 * This uses the Mersenne Twister algorithm (underlying for array_rand), which is secure enough
	 * and a psuedo-random enough number
	 * @param int $length
	 * @param array $chars
	 * @return string generated token
	 */
	public static function generateTokenFromCharset(int $length, array $chars): string {
		return str_shuffle(implode("", array_map(function ($in) use ($chars) {
			return $chars[array_rand($chars)];
		}, range(1, $length))));
	}
}
