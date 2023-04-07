<?php 
session_start();
define('ENTRANSE', 'web');
define('INDEX', true);
define('ROOT', str_replace('\\', '/', __DIR__));
define('ARGV', null);
require_once ROOT . '/system/system.php';
