<?php defined('SYSPATH') or die('No direct script access.');

define('TWIGPATH', __DIR__ . DIRECTORY_SEPARATOR);

include Kohana::find_file('vendor', 'autoload');

// Prepare twig environment
Twig::init();
