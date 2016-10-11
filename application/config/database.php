<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname
			 * string   username
			 * string   password
			 * boolean  persistent
			 * string   database
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => 'localhost',
			'username'   => 'redacted',
			'password'   => 'redacted',
			'persistent' => FALSE,
			'database'   => 'redacted',
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	'production' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'redacted',
			'username'   => 'redacted',
			'password'   => 'redacted',
			'persistent' => FALSE,
			'database'   => 'redacted',
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	)
);