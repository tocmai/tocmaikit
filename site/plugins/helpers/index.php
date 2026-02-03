<?php
/*
	Returns a localized date
*/
if (!function_exists('localedate')) {
	function localedate(string|DateTimeInterface|null $date): string {
		static $kirby = Kirby::instance();
		if (!$date) {
			return '';
		}
		if (is_string($date)) {
			$date = new DateTimeImmutable($date);
		}
		$formatter = new IntlDateFormatter(
			$kirby->language(),
			IntlDateFormatter::LONG,
			IntlDateFormatter::NONE
		);
		return $formatter->format($date);
	}
}
/*
	Returns a localized time
*/
if (!function_exists('localetime')) {
	function localetime(string|DateTimeInterface|null $date): string {
		static $kirby = Kirby::instance();
		if (!$date) {
			return '';
		}
		if (is_string($date)) {
			$date = new DateTimeImmutable($date);
		}
		$formatter = new IntlDateFormatter(
			$kirby->language(),
			IntlDateFormatter::NONE,
			IntlDateFormatter::SHORT
		);
		return $formatter->format($date);
	}
}