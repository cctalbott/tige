<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'driver' => 'ORM',
	'hash_method' => 'sha1',
	'salt_pattern' => '2, 4, 6, 8, 12, 15, 19, 24, 31, 39',
	'lifetime' => 1209600,
	'session_key' => 'auth_user',
	'users' => array(),
);
