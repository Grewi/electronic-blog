<?php 
namespace app\prefix;
use system\core\user\login;
use system\core\valid\validated;

class auth
{
    public function index()
    {
        if(isset($_POST['email']) && isset($_POST['password'])  && !user_id()){
            $login = login::connect();
            $login->login_('/login');
        }

        if(isset($_REQUEST['output']) && user_id()){
            $login = login::connect();
            $login->out('/login');
        }
    }
}