<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\config\config;

class configsController extends controller
{
    public function index()
    {
        $this->title('Конфигурация');
        new view('doc/configs', $this->data);
    }
}
