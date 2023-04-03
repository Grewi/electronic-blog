<?php 
namespace app\controllers\test;
use app\controllers\controller;
use app\models\users;
use electronic\core\validate\validate;
use electronic\core\config\config;
use electronic\lib\test\test as tt;

class test extends controller
{
    public function index()
    {
        // $user = new users();
        // var_dump($user);
        // $data = [
        //     'email' => '111@222.333',
        //     'email_code' => '1234',
        //     'password' => '1111',
        //     'active' => '0',
        //     'user_role_id' => '1'
        // ];
        // $up = $user->insert($data);
        $user = users::find(3);
        $user->email_code = '99999';
        $up = $user->save();
        var_dump($up);
    }
}
