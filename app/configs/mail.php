<?php 

namespace app\configs;
!INDEX ? exit('exit') : true;

class mail
{

    public function set() : array
    {
        return [
            'host'      => 'ssl://smtp.yandex.ru',
            'port'      => '465',
            'userName'  => 'grewi@ya.ru',
            'password'  => '0000000000',
			'fromEmail' => 'grewi@ya.ru', // от кого (email)
            'fromName'  => 'Electronic', // от кого (имя)
            'replyTo'   => 'grewi@ya.ru',
            'logs'      => '0',
        ];
    }
}