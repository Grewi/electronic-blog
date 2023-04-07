<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use electronic\core\view\view;

class routeController extends controller
{
    public function index()
    {
        $this->title('Маршрутизация');
        new view('doc/route', $this->data);
    }
}
