<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use electronic\core\view\view;

class modelController extends controller
{
    public function index()
    {
        $this->title('Модель');
        new view('doc/model', $this->data);
    }
}
