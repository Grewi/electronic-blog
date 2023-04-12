<?php 
namespace app\controllers\user;
use app\controllers\controller;
use system\core\view\view;

class authController extends controller
{
    public function index()
    {
        new view('user/login', $this->data);
    }

    public function login()
    {
        if(user_id() > 0){
            redirect('/');
        }
        // dd(password_hash('123456', PASSWORD_DEFAULT));
        $this->title('Вход');
        new view('user/login', $this->data);
    }
}
