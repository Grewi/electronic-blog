<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use system\core\view\view;

class dbController extends controller
{
    public function index()
    {
        $this->title('База данных');
        new view('doc/db', $this->data);
    }
}
