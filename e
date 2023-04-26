<?php

define('INDEX', true);
define('ROOT', str_replace('\\', '/', __DIR__));
define('APP_NAME', 'app');
define('APP', ROOT . '/' . APP_NAME);
define('SYSTEM', ROOT . '/system');
define('ENTRANSE', 'console');
define('ARGV', $argv ?? $_SERVER['argv']);

require_once ROOT . '/system/system.php';