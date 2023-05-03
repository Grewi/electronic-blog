<?php

$adminDir = \electronic\core\config\config::globals('adminDir');


$route->namespace('app\controllers\admin')->group($adminDir, function($route){
    $route->prefix('admin');
    $route->get('/')->controller('adminController', 'index');

    //Users
    $route->get('/users')->controller('usersController', 'index');
    $route->get('/users/create')->controller('usersController', 'create');
    $route->post('/users/create')->controller('usersController', 'save');
    $route->get('/users/delete/{user_id}')->controller('usersController', 'deleteModal');
    $route->post('/users/delete/{user_id}')->controller('usersController', 'delete');
    $route->get('/users/update/{user_id}')->controller('usersController', 'updateModal');
    $route->post('/users/update/{user_id}')->controller('usersController', 'update');
    $route->post('/users/valid-email')->controller('usersController', 'validEmail');
});

$route->namespace('app\controllers\admin\blog')->group($adminDir .'/blog', function($route){
    $route->get('/category/create/{parent_id?}')->controller('categoryController', 'createModal');
    $route->post('/category/create')->controller('categoryController', 'create');
    $route->get('/category/{parent_id?}')->controller('categoryController', 'index');

    $route->get('/posts')->controller('postsController', 'index');
    $route->get('/posts/create')->controller('postsController', 'create');
});

$error = new \app\controllers\error\error();
$error->routeError();