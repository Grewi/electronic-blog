<?php 

session_start();

define('ENTRANSE', 'web');
define('INDEX', true);
define('ROOT', str_replace('\\', '/', __DIR__));
define('ARGV', null);

function root()
{
    return $_SERVER['REQUEST_URI'];
}

require_once ROOT . '/system/system.php';
