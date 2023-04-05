<?php

namespace app\controllers\admin;

use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\lang\lang;

class adminController extends controller
{
    public function index()
    {
        $this->title(lang::admin('title'));
        new view('admin/admin/index', $this->data);
    }

    public function create()
    {
        $this->title('');
        new view('admin/admin/create', $this->data);
    }

    public function update()
    {
        $this->title('');
        new view('admin/admin/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('admin/admin/delete', $this->data);
    }
}
