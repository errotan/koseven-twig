<?php
define('SYSPATH', __DIR__.'/vendor/kohana/core/');
define('APPPATH', getcwd().'/');
define('EXT', '.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/vendor/kohana/core/classes/Kohana/Core.php';
require __DIR__.'/vendor/kohana/core/classes/Kohana.php';

spl_autoload_register(['Kohana', 'auto_load']);

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Set The Default Timezone
|--------------------------------------------------------------------------
|
| Here we will set the default timezone for PHP. PHP is notoriously mean
| if the timezone is not explicitly set. This will be used by each of
| the PHP date and date-time functions throughout the application.
|
*/

date_default_timezone_set('UTC');
