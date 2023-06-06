<?php

namespace app\controllers\index;

use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\lang\lang;

class indexController extends controller
{
    public function index()
    {
        $this->title(lang::main('home'));
        $this->data['userType'] = 'admin';
        new view('index/index', $this->data);
    }
}
