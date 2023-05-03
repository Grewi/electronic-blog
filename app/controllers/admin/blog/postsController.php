<?php 
namespace app\controllers\admin\blog;
use app\models\blog_post;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\lang\lang;
use electronic\core\config\config;

class postsController extends controller
{
    public function index()
    {
        $posts = blog_post::pagin();
        $this->title(lang::blog('blogPosts'));
        $this->data['posts'] = $posts->all();
        $this->data['pagin'] = $posts->pagination();
        new view('admin/blog/posts/index', $this->data);
    }

    public function create()
    {
        $this->breadcrumb('/' . config::globals('adminDir') . '/', lang::admin('title'));
        $this->breadcrumb('/' . config::globals('adminDir') . '/blog/posts/', lang::blog('blogPosts'));
        $this->title(lang::blog('newPost'));
        $this->data['breadcrumb'] = $this->breadcrumb;
        new view('admin/blog/posts/create', $this->data);
    }

    public function update()
    {
        $this->title('');
        new view('admin/blog/posts/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('admin/blog/posts/delete', $this->data);
    }
}
