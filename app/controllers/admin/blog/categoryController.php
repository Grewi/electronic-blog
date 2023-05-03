<?php

namespace app\controllers\admin\blog;

use app\models\blog_category;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\view\viewJson;
use electronic\core\lang\lang;
use electronic\core\validate\validate;
use electronic\core\config\config;

class categoryController extends controller
{

    public function index()
    {
        $parent_id = request('get')->parent_id;
        $parent = $parent_id ? (int)$parent_id : 0;
        $categories = blog_category::where('parent', $parent)->pagin();
        $this->title(lang::blog('category'));
        $this->data['categories'] = $categories->all();
        $this->data['pagin'] = $categories->pagination();
        $this->data['parentId'] = $parent;
        $this->data['breadcrumb'] = $this->bc($parent);
        new view('admin/blog/category/index', $this->data);
    }

    public function createModal()
    {
        $parent = blog_category::find(request('get')->parent_id);
        $this->data['title'] = lang::blog('blogCategoryCreate');
        $this->data['paramModal'] = 'modal-lg';
        $this->data['parentId'] = $parent ? $parent->id : 0;
        $this->data['parentName'] = $parent ? $parent->name : lang::blog('rootParent');
        new viewJson('admin/blog/category/create', $this->data);
    }

    public function create()
    {
        $valid = new validate();
        $valid->name('csrf')->csrf('blogCategoryCreate');
        $valid->name('parent')->int()->toInt();
        $valid->name('name')->text()->empty();
        $valid->name('slug')->latRuInt();
        $valid->name('description')->text();
        $valid->name('sort')->int()->toInt();
        if ($valid->control()) 
        {
            $parent = blog_category::find($valid->return('parent'));
            if (!$parent && $valid->return('parent') != 0) {
                alert2(lang::blog('errorParent'), 'danger');
                redirect(referal_url());
            }

            if (empty($valid->return('slug'))) {
                $slug = translit_slug($valid->return('name'));
            } else {
                $slug = translit_slug($valid->return('slug'));
            }

            $data = [
                'parent' => $valid->return('parent'),
                'name' => $valid->return('name'),
                'slug' => $slug,
                'description' => $valid->return('description'),
                'sort' => $valid->return('sort'),
            ];

            $category = blog_category::insert($data);
            alert2(lang::blog('createCategorySuccess'), 'success');
            redirect(referal_url());
        } else 
        {
            alert2(lang::blog('createCategoeyFailed'), 'danger');
            redirect(referal_url());
        }
    }

    public function update()
    {
        $this->title('');
        new view('admin/blog/category/update', $this->data);
    }

    public function delete()
    {
        $this->title('');
        new view('admin/blog/category/delete', $this->data);
    }

    private function bc($categoryId)
    {
        $c = blog_category::find($categoryId);
        if(!$c){
            $this->breadcrumb('/' . config::globals('adminDir') . '/blog/category/', lang::blog('categories'));
            return $this->breadcrumb;
        }

        $this->breadcrumb('/' . config::globals('adminDir') . '/blog/category/' . $c->id, $c->name);

        if($c->parent != 0){
            return $this->bc($c->parent);
        }else{

            $this->breadcrumb('/' . config::globals('adminDir') . '/blog/category/', lang::blog('categories'));

            $this->breadcrumb = array_reverse($this->breadcrumb);
            return $this->breadcrumb;
        }
    }
}
