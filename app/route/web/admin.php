<?php

$adminDir = \electronic\core\config\config::globals('adminDir');

$route->namespace('app\controllers\admin')->group($adminDir, function($route){
    $route->prefix('admin');
    $route->get('/')->controller('adminController', 'index')->exit();
    $route->get('/users')->controller('usersController', 'index')->exit();
    $route->get('/users/create')->controller('usersController', 'create')->exit();
    $route->post('/users/create')->controller('usersController', 'save')->exit();
    $route->get('/users/delete/{user_id}')->controller('usersController', 'deleteModal')->exit();
    $route->get('/users/update/{user_id}')->controller('usersController', 'updateModal')->exit();
    $route->post('/users/update/{user_id}')->controller('usersController', 'update')->exit();
    exit();
});