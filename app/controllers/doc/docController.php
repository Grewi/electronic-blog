<?php 
namespace app\controllers\doc;

use app\models\doc;
use app\models\doc_category;
use app\controllers\controller;
use electronic\core\view\view;
use electronic\core\request\request;

class docController extends controller
{
    public function index()
    {
        $id = request::get('get')->doc_id;

        //$allCategory = doc_category::all();
        //$this->data['allCategory'] = $allCategory;
        $this->title('Документация');
        new view('doc/doc', $this->data);
    }
}
