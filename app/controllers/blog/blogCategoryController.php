<?php 
namespace app\controllers\blog;
use app\controllers\controller;
use system\core\view\view;

class blogCategoryController extends controller
{
    public function index()
    {
        $this->title('Категории блога');
        new view('blog/category', $this->data);
    }

    public function create()
    {
        if(user_id() == 0){
            $this->error404();
        }
        $this->title('Создать новую категорию блога');
        new view('blog/categoryCreate', $this->data);
    }
}
