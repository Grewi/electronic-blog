<?php

namespace app\controllers\test;

use app\models\users;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\migration\migration;
use electronic\core\validate\validate;

class testController extends controller
{
    public function index()
    {
        // $user = users::find(user_id());
        // $user->email_code = '4321';
        // $user->save();
        // $users = users::all();
        // $data = [
        //     'email' => 'test@ya.ru',
        //     'email_code' => '123456',
        //     'email_status' => '1',
        //     'password' => '$2y$10$CgcnD9KQqVjnmUH87/rqBuemv94y8lfzGgLXU3UvoeznI9TL9q3Gm',
        //     'name' => 'test',
        //     'active' => '1',
        //     'user_role_id' => '1',
        // ];
        // $new = users::insert($data);
        // users::where('id', 7)->delete();
        $users = users::all();
        dd($users);
    }

    public function sanitScript()
    {

        $text = '<div src=1 onerror="alert" oncopy = "alert(`copy`)">test</div>
        <hr onclick="alert(123)">
        <a href="#" onclick=\'alert("test")\'>123</a>
        <a href="#" onclick=`alert("test")`>123</a>
        <img src="#" onerror="alert(0)">
        <script>alert("script")</script> <script src="/"></script> </script src="/">';

        $valid = new validate();
        $valid->name('test', $text)->scriptsDelete();

        dump($text);
        dump($valid->return('test'));
        echo $valid->return('test');
    }
}
