<?php 
namespace app\controllers\error;
use app\controllers\controller;
use system\core\view\view;

class error extends controller
{
    public function index()
    {
        $this->error404();
    }
}
