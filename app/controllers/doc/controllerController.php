<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use electronic\core\view\view;

class controllerController extends controller
{
    public function index()
    {
        $this->title('Контроллер');
        new view('doc/controller', $this->data);
    }
}
