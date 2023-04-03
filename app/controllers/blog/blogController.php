<?php 
namespace app\controllers\blog;
use app\models\blog_post;
use app\controllers\controller;
use system\core\view\view;
use system\core\validate\validate;
use system\core\request\request;

class blogController extends controller
{
    public function index()
    {  
        $this->title('Блог');
        $this->data['posts'] = blog_post::all();
        new view('blog/index', $this->data);
    }

    public function post()
    {
        $post_id = request::get()->get->post_id;
        $post = blog_post::find($post_id);
        $this->title($post->title);
        $this->data['post'] = $post;
        new view('blog/post', $this->data);        
    }

    public function create()
    {
        if(user_id() == 0){
            $this->error404();
        }
        $this->title('Новый пост');
        new view('blog/create', $this->data);        
    }

    public function save()
    {
        if(user_id() == 0){
            redirect( referal_url() );
        }
        $valid = new validate();
        $valid->name('csrf')->csrf('createPostBlog');
        $valid->name('title')->text()->empty();
        $valid->name('description')->text();
        $valid->name('content')->text();
        if($valid->control()){
            $data = [
                'user_id' => user_id(),
                'blog_category_id' => null,
                'title' => $valid->return('title'),
                'description' => $valid->return('description'),
                'img' => null,
                'content' => $valid->return('content'),
            ];
            blog_post::insert($data);
            redirect( referal_url() );
        }
    }
}
