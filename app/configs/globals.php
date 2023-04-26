<?php 
namespace app\configs;
class globals
{
    public function set() : array
    {
        return [
            'dev'          => 0,
            'lang'         => 'ru',
            'app'          => 'app',
            'title'        => 'Electronic',
            'adminDir'     => 'grewi',
            'authDir'      => 'login',
			'session_time' => 60 * 60 * 24 * 365,
        ];
    }
}