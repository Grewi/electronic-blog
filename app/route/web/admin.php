<?php

$adminDir = \electronic\core\config\config::globals('adminDir');

$route->namespace('app\controllers\admin')->group($adminDir, function($route){
    $route->prefix('admin');
    $route->get('/')->controller('adminController', 'index')->exit();
    $route->get('/users')->controller('usersController', 'index')->exit();
    $route->get('/users/create')->controller('usersController', 'create')->exit();
    $route->post('/users/create')->controller('usersController', 'save')->exit();
    exit();
});