<?php
namespace app\prefix;
use app\models\users;
use app\models\user_role;
use electronic\core\config\config;

class admin
{
    public function index()
    {
        $user = users::find(user_id());
        $role = user_role::where('slug', 'admin')->get();
        $authDir = config::globals('authDir') ?? '/';
        if(!$user || $user->user_role_id != $role->id){
            redirect($authDir);
        }
    }
}