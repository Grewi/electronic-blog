<?php 
namespace app\controllers\test;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\migration\migration;

class testController extends controller
{
    public function index()
    {
        $m = new migration();
        $a = [];
        $m->createTable('test', function($m){
            $m->id();
            $m->int('age', 11)->null();
            $m->decimal('data', 8, 2)->notNull();
        });
        dd($m);
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
