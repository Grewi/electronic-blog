<?php 
namespace app\controllers\error;
use app\controllers\controller;
use system\core\view\view;

class error extends controller
{
    public function routeError()
    {
        $this->error404();
    }
}
