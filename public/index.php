<?php

/*
    Kirby stores Date/Time fields as set by user,
    without serializing the timezone.

    We want all PHP functions to consider that dates
    are in Romania’s timezone.
*/
date_default_timezone_set('Europe/Bucharest');

$base = dirname(__DIR__);

require $base . '/vendor/autoload.php';

$kirby = new Kirby([
	'roots' => [
		'index'     => $base . '/public',
		'site'      => $base . '/site',
		'content'   => $base . '/storage/content',
		'accounts'  => $base . '/storage/accounts',
		'languages' => $base . '/storage/languages',
		'license'   => $base . '/storage/.license',
		'cache'     => $base . '/runtime/cache',
		'logs'      => $base . '/runtime/logs',
		'sessions'  => $base . '/runtime/sessions',
	]
]);

echo $kirby->render();
