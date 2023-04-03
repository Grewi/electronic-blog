<?php 
namespace app\controllers\blog;
use app\controllers\controller;
use system\core\view\view;
use system\core\view\viewJson;

class blog_gallery extends controller
{
    public function index()
    {
        $this->title('');
        new view('index/index', $this->data);
    }

    //Основной блок
    public function block()
    {
        $this->title('');
        new viewJson('blog/gallery_block', $this->data);
    }

    //Категории галлереи
    public function category()
    {
        
    }
}
