<?php

ini_set('date.timezone', 'Europe/Bratislava');
$root = dirname(__DIR__, 2);

return [
	'debug'=>true,

	'db' => [
		'type' => 'sqlite',
		'database' => $root . '/comments.sqlite3'
	],
];
