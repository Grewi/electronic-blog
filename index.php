<?php 
session_start();
define('ENTRANSE', 'web');
define('INDEX', true);
define('ROOT', str_replace('\\', '/', __DIR__));
define('ARGV', null);
define('APP_NAME', 'app');
define('APP', ROOT . '/' . APP_NAME);
define('SYSTEM', ROOT . '/system');
require_once SYSTEM . '/system.php';
