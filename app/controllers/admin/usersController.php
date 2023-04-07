<?php

namespace app\controllers\admin;
use app\models\users;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\lang\lang;


class usersController extends controller
{
    public function index()
    {
        $users = users::pagin();
        $this->title(lang::users('title'));
        $this->data['users'] = $users->all();
        $this->data['pagin'] = $users->pagination();
        new view('admin/users/index', $this->data);
    }

    public function create()
    {
        $this->title(lang::users('newUser'));
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
