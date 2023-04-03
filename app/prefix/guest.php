<?php 
namespace app\prefix;
use system\core\view\view;

class guest
{
    public function index()
    {
        if(!user_id()){
            $data = [];
            $index  = new view('index/user', $data);
            exit();
        }
    }
}