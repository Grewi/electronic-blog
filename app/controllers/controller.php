<?php 

namespace app\controllers;
use electronic\core\config\config;
use electronic\core\view\view;

abstract class controller extends \system\core\controller\controller
{
    protected $data;
    protected $breadcrumb;

    public function __construct()
    {
        $this->title();
        $this->alert();
        $this->alert2();
        $this->alertAdmin();
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

    protected function alert2()
    {
        if ( isset($_SESSION['alert2']) ) {
            $this->data['alert2'] = $_SESSION['alert2'];
            unset($_SESSION['alert2']);
        } else {
            $this->data['alert2'] = [];
        }
    }

    protected function alertAdmin()
    {
        if ( isset($_SESSION['alertAdmin']) ) {
            $this->data['alertAdmin'] = $_SESSION['alertAdmin'];
            unset($_SESSION['alertAdmin']);
        } else {
            $this->data['alertAdmin'] = [];
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

    protected function breadcrumb(string $url, string $name)
    {
        $this->breadcrumb[] = ['url' => $url, 'name' => $name];
    }

    public function error404()
    {
        http_response_code(404);
        new view('error/error404', $this->data);
        exit();
    }
}