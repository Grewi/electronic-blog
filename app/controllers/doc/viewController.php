<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use electronic\core\view\view;

class viewController extends controller
{
    public function index()
    {
        $this->title('');
        new view('doc/view', $this->data);
    }
}
