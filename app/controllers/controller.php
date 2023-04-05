<?php 

namespace app\controllers;
use electronic\core\config\config;
use electronic\core\view\view;

abstract class controller extends \system\core\controller\controller
{
    protected $data;

    public function __construct()
    {
        $this->title();
        $this->alert();
        $this->data();
        $this->error();
        $this->data['lang'] = config::globals('lang');
        $this->data['title'] = lang('global', 'title');   
        $this->data['authDir'] = config::globals('authDir');
        $this->data['adminDir'] = config::globals('adminDir');
    }

    protected function alert()
    {
        if ( isset($_SESSION['alert']) ) {
            $this->data['alert'] = $_SESSION['alert'];
            unset($_SESSION['alert']);
        } else {
            $this->data['alert'] = [];
        }
    }

    protected function data()
    {
        if(isset($_SESSION['data'])){
            foreach($_SESSION['data'] as $k => $i){
                $this->data[$k]  = $i;
            }
            unset($_SESSION['data']);
        }
    }

    protected function error()
    {
        if (isset($_SESSION['error'])) {
            foreach ($_SESSION['error'] as $k => $i) {
                $this->data['error_' . $k]  = $i;
                $this->data['error_class_' . $k] = 'is-invalid';
                $this->data['class_' . $k] = 'is-invalid';
            }
            unset($_SESSION['error']);
        }
    }

    protected function title(string $title = '')
    {
        $configTitle = config::globals('title');
        $sep = ' | ';
        if(!empty($title)){
            $this->data['title'] = $title . $sep . $configTitle;
        }else{
            $this->data['title'] = $configTitle;
        }
    }

    public function error404()
    {
        http_response_code(404);
        new view('error/error404', $this->data);
        exit();
    }
}