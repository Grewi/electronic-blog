<?php 
use system\core\route\route;

$route  = new route();

//До объявления get prefix действует глобально
$route->prefix('auth', 'index'); // Обработка форм входа и выхода

$route->namespace('app/controllers/index');
$route->get('/')->controller('indexController', 'index')->exit();

$route->namespace('app/controllers/user');
$route->get('/login')->controller('authController', 'login')->exit();

$route->namespace('app/controllers/configs');
$route->get('/configs')->controller('configsController', 'index')->exit();

$route->namespace('app\controllers\blog')->group('blog', function($route){
    $route->get('/')->controller('blogController', 'index')->exit();
    $route->get('/category')->controller('blogCategoryController', 'index')->exit();
    $route->get('/category/create')->controller('blogCategoryController', 'create')->exit();
    $route->get('/post/create')->controller('blogController', 'create')->exit();
    $route->post('/post/save')->controller('blogController', 'save')->exit();
    $route->get('/post/{post_id}')->controller('blogController', 'post')->exit();
    $route->get('/ajax/gallery')->controller('blog_gallery', 'block')->exit();    
});

$route->namespace('app/controllers/doc')->group('doc', function($route){
    $route->get('/')->controller('docController', 'index')->exit();
    $route->get('/{doc_id}')->controller('docController', 'index')->exit();
    $route->get('/configs')->controller('configsController', 'index')->exit();
    $route->get('/route')->controller('routeController', 'index')->exit();
    $route->get('/model')->controller('modelController', 'index')->exit();
    $route->get('/db')->controller('dbController', 'index')->exit();
    $route->get('/migrate')->controller('migrateController', 'index')->exit();
    $route->get('/controller')->controller('controllerController', 'index')->exit();
    $route->get('/view')->controller('viewController', 'index')->exit();    
});

$route->namespace('app/controllers/test')->group('test', function($route){
    $route->get('/')->controller('test', 'index')->exit();
    $route->get('/{param}')->controller('test', 'index')->exit();
});

$route->namespace('app/controllers/upload');
$route->post('/upload')->controller('uploadController', 'index')->exit();
$route->get('/upload')->controller('uploadController', 'index')->exit();

// error404
$route->namespace('app/controllers/error')->controller('error', 'error404')->exit();