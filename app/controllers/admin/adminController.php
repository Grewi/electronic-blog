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
}
