<?php 
namespace app\controllers\doc;
use app\controllers\controller;
use system\core\view\view;

class migrateController extends controller
{
    public function index()
    {
        new view('doc/migrate', $this->data);
    }
}
