<?php

namespace app\controllers\admin;
use app\models\users;
use app\models\user_role;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\view\viewJson;
use electronic\core\lang\lang;
use electronic\core\validate\validate;


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
        $roles = user_role::all();
        $this->title(lang::users('newUser'));
        $this->data['roles'] = $roles;
        new view('admin/users/create', $this->data);
    }

    public function save()
    {
        $valid = new validate();
        $valid->name('csrf')->csrf('userCreate');
        $valid->name('name')->text();
        $valid->name('email')->mail()->empty()->errorText(lang::users('uniqueEmail'))->unique('users', 'email', 0);
        $valid->name('password')->pass()->empty();
        $valid->name('user_role')->isset('user_role', 'id', 0)->toInt();
        if($valid->control()){
            $data = [
                'name' => $valid->return('name'),
                'email' => $valid->return('email'),
                'password' => password_hash($valid->return('password'), PASSWORD_DEFAULT),
                'active' => 1,
                'email_code' => rand(1000, 9999),
                'email_status' => 0,
                'user_role_id' => $valid->return('user_role'),
            ];
            users::insert($data);
            redirect(referal_url());
        }else{
            redirect(referal_url(), $valid->return(), $valid->error());
        }

    }

    public function updateModal()
    {
        $user = users::find(request('get')->user_id);
        $roles = user_role::all();
        $this->title('');
        $this->data['user'] = $user;
        $this->data['roles'] = $roles;
        $this->data['paramModal'] = 'modal-lg';
        new viewJson('admin/users/update', $this->data);
    }

    public function update()
    {
        $user = users::find(request('get')->user_id);
        $valid = new validate();
        $valid->name('csrf')->csrf('userUpdate');
        $valid->name('name')->text();
        $valid->name('email')->mail()->errorText(lang::users('uniqueEmail'))->empty();
        $valid->name('password')->pass();
        $valid->name('user_role')->isset('user_role', 'id', 0)->toInt();
        if($valid->control() && $user){

            $user->name = $valid->return('name');
            $user->email = $valid->return('email');
            $user->password = password_hash($valid->return('password'), PASSWORD_DEFAULT);
            $user->user_role_id = $valid->return('user_role');
            $user->save();
            alert2(lang::users('userEditSuccess'), 'primary');
            redirect(referal_url());
        }else{
            alert2(lang::users('userEditFailed'), 'danger');
            redirect(referal_url(), $valid->return(), $valid->error());
        }
    }

    public function deleteModal()
    {
        $user = users::find(request('get')->user_id);
        $this->data['user'] = $user;
        new viewJson('admin/users/delete', $this->data);
    }

    public function delete()
    {
        $user = users::find(request('get')->user_id);
        $valid = new validate();
        $valid->name('csrf')->csrf('deleteUser');
        if($user && $valid->control()){
            $user->delete();
            alert2(lang::users('userDeleteSucces'), 'primary');
            redirect(referal_url());
        }else{
            alert(lang::users('userDeleteFaled'), 'danger');
            redirect(referal_url());
        } 
    }
}
