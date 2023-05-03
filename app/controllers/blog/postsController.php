<?php 
namespace app\controllers\blog;
use app\controllers\controller;
use electronic\core\view\view;

class postsController extends controller
{
    public function index()
    {
        $this->title('');
        new view('blog/posts/index', $this->data);
    }

    public function create()
    {
        $this->title('');
        new view('blog/posts/create', $this->data);
    }

    public function update()
    {
        $this->title('');
        new view('blog/posts/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('blog/posts/delete', $this->data);
    }
}
