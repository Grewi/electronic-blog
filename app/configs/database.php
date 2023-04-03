<?php 
namespace app\configs;
!INDEX ? exit('exit') : true;

class database
{

    public function set() : array
    {
        return [
            'type'      => 'mysql',
            'name'      => 'grewi',
            'user'      => 'root',
            'pass'      => '',
            'host'      => 'localhost',
            'file_name' => '',
        ];
    }
}