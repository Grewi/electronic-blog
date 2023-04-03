<?php

define('INDEX', true);
define('ROOT', str_replace('\\', '/', __DIR__));
define('ENTRANSE', 'console');
define('ARGV', $argv ?? $_SERVER['argv']);

require_once ROOT . '/system/system.php';