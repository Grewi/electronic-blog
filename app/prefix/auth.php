<?php 
namespace app\prefix;
use system\core\user\auth as login;
use system\core\config\config;

class auth
{
    public function index()
    {
        $authDir = config::globals('authDir');
        if(isset($_POST['email']) && isset($_POST['password'])  && !user_id()){
            login::redirectFailed($authDir)->redirectSuccess('/')->login();
        }

        if(isset($_REQUEST['output']) && user_id()){
            login::out();
        }
    }
}