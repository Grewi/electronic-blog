<?php 
namespace app\filter;
use system\core\logs\logs;
use system\core\request\request;
use system\core\config\config;

class auth
{
    public function index()
    {
        $authDir = config::globals('authDir');
        if(isset($_POST['email']) && isset($_POST['password'])  && !user_id()){
            \system\core\user\auth::redirectFailed($authDir)->redirectSuccess('/')->login(null, null, function($auth, $user, $valid){
                $logs = [
                    'ip' => request::get('global')->ip,
                    'browser_family' => $_SESSION['browser_family'],
                    'device_name' => $_SESSION['device_name'],
                    'device_type' => $_SESSION['device_type'],
                    'os_name' => $_SESSION['os_name'],
                ];
                $text = '<ul>
                    <li>ip - ' . $logs['ip'] . '</li>
                    <li>browser_family - ' . $logs['browser_family'] . '</li>
                    <li>device_type - ' . $logs['device_type'] . '</li>
                    <li>os_name - ' . $logs['os_name'] . '</li>
                </ul>';
                logs::userId($user->id)->name('auth', 'Авторизация пользователя')->description($text)->insert($logs, 'auth');

                if($auth->status){
                    redirect(referal_url());
                } else {
                    $authDir = config::globals('authDir');
                    $error = [
                        'email' => 'Введённые данные не верны!',
                    ];
                    alert2('Войти не удалось!', 'danger', '');
                    redirect($authDir ?? referal_url(), $valid->data(), $error);
                }
            });
        }

        if(isset($_REQUEST['output']) && user_id()){
            \system\core\user\auth::out(function(){
                logs::name('exit', 'Выход пользователя')->insert();
                header('Location: /');
            });
        }
    }
}