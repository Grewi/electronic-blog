<?php 
    namespace app\controllers\test;
    use app\controllers\controller;
    use system\core\view\view;
    
    class testController extends controller
    {
        public function index()
        {
            $this->title('');
            new view('test/test', $this->data);
        }
    }
            