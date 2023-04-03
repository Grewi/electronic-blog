<?php

namespace app\controllers\index;

use app\models\category;
use app\models\users;
use app\controllers\controller;
use system\core\view\view;
use system\core\validate\validate;

class indexController extends controller
{

    public function index()
    {
        $this->title('Главная страница');
        $this->data['userType'] = 'admin';

        new view('index/index', $this->data);
    }

}
