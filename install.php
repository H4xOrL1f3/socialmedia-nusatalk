<?php

date_default_timezone_set('UTC');

$autoload_path = __DIR__ . '/vendor/autoload.php';
$autoload_available = include_once($autoload_path);
if (!$autoload_available) {
	die("Couldn't include '$autoload_path'. Did you run `composer install`?");
}

\Elgg\Application::install();