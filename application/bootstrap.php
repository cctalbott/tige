<?php defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://docs.kohanaphp.com/about.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://docs.kohanaphp.com/about.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://docs.kohanaphp.com/about.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
  'base_url' => 'http://kohana.tige.dev/',
  //'base_url' => 'http://staging.tige.com/',
  //'base_url' => 'http://tige.com/',
  'index_file' => '',
  'charset' => 'utf-8',
  'errors' => TRUE,
  'caching' => FALSE
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth'       => MODPATH.'auth',       // Basic authentication
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database' => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	'orm' => MODPATH.'orm',        // Object Relationship Mapping
	// 'pagination' => MODPATH.'pagination', // Paging of results
	'userguide' => MODPATH.'userguide',  // User guide and API documentation
	'cache' => MODPATH.'samsoir-kohana-cache-95e2b14', // caching
	'twitter' => MODPATH.'somorok-Kohana-Twitter-fe7b6df', // twitter API
	'calendar' => MODPATH.'calendar', // calendar library
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */  
Route::set('admin_user', 'admin/user(/<action>(/<id>))')
  ->defaults(array(
    'controller' => 'admin_user',
    'action' => 'index'
  ));

Route::set('admin_contact', 'admin/contact(/<action>(/<id>))')
  ->defaults(array(
    'controller' => 'admin_contact',
    'action' => 'index'
  ));

Route::set('warranty', 'performance/lifetime-warranty')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'warranty'
  ));

Route::set('pcm_engines', 'performance/pcm-engines')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'engines'
  ));

Route::set('wet_sounds_audio', 'performance/wet-sounds-audio')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'audio'
  ));

Route::set('alpha_z_tower', 'performance/alpha-z-tower')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'alpha_z_tower'
  ));

Route::set('functional_design', 'performance/functional-design')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'functional_design'
  ));

Route::set('tigetouch', 'performance/touch(/<section>)')
  ->defaults(array(
    'controller' => 'performance',
    'action' => 'touch',
    'section' => 'speedset'
  )); 

Route::set('locate', 'locate(/<controller>(/<action>(/<id>)))')
	->defaults(array(
	  'directory'  => 'locate',
		'controller' => 'dealer',
	));
	
Route::set('calendar_day', 'calendar_day(/<day>(/<month>(/<year>)))')
  ->defaults(array(
    'controller' => 'calendar_day',
    'action' => 'index',
    'day' => '\d+',
    'month' => '\d+',
    'year' => '\d+'
  ));
  
Route::set('boatfeatures', 'boatfeatures(/<action>(/<model>))')
  ->defaults(array(
    'controller' => 'boatfeatures',
    'action' => 'bow',
    'model' => 'rz4'
  ));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));

/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
echo Request::instance()
	->execute()
	->send_headers()
	->response;
