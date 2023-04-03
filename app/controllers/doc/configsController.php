<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use system\core\view\view;
use system\core\config\config;

class configsController extends controller
{
    public function index()
    {
        $this->title('Конфигурация');
        new view('doc/configs', $this->data);
    }
}
