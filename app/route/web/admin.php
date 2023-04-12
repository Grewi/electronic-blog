<?php

$adminDir = \electronic\core\config\config::globals('adminDir');


$route->namespace('app\controllers\admin')->group($adminDir, function($route){
    $route->prefix('admin');
    $route->get('/')->controller('adminController', 'index')->exit();

    //Users
    $route->get('/users')->controller('usersController', 'index')->exit();
    $route->get('/users/create')->controller('usersController', 'create')->exit();
    $route->post('/users/create')->controller('usersController', 'save')->exit();
    $route->get('/users/delete/{user_id}')->controller('usersController', 'deleteModal')->exit();
    $route->post('/users/delete/{user_id}')->controller('usersController', 'delete')->exit();
    $route->get('/users/update/{user_id}')->controller('usersController', 'updateModal')->exit();
    $route->post('/users/update/{user_id}')->controller('usersController', 'update')->exit();
});

$route->namespace('app\controllers\admin\blog')->group($adminDir .'/blog', function($route){
    $route->get('/category/create/{parent_id?}')->controller('categoryController', 'createModal')->exit();
    $route->post('/category/create')->controller('categoryController', 'create')->exit();
    $route->get('/category/{parent_id?}')->controller('categoryController', 'index')->exit();
});

exit();