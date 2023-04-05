<?php

namespace app\controllers\admin;
use app\models\users;
use app\controllers\controller;
use system\core\view\view;

class usersController extends controller
{
    public function index()
    {
        $users = users::all();
        $this->title('');
        $this->data['users'] = $users;
        new view('admin/users/index', $this->data);
    }

    public function create()
    {
        $this->title('');
        new view('admin/users/create', $this->data);
    }

    public function update()
    {
        $this->title('');
        new view('admin/users/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('admin/users/delete', $this->data);
    }
}
