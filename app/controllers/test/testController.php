<?php 
namespace app\controllers\test;
use app\controllers\controller;
use electronic\core\view\view;

class testController extends controller
{
    public function index()
    {
        $this->title('');
        new view('test/test/index', $this->data);
    }

    public function create()
    {
        $this->title('');
        new view('test/test/create', $this->data);
    }

    public function update()
    {
        $this->title('');
        new view('test/test/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('test/test/delete', $this->data);
    }
}
