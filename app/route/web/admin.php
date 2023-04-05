<?php

$adminDir = \electronic\core\config\config::globals('adminDir');

$route->namespace('app\controllers\admin')->group($adminDir, function($route){
    $route->get('/')->prefix('admin')->controller('adminController', 'index')->exit();
    $route->get('/users')->prefix('admin')->controller('usersController', 'index')->exit();
});