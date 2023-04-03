<?php 
namespace app\controllers\upload;
use app\controllers\controller;
use system\lib\files\files;

class uploadController extends controller
{
    public function index()
    {
        dump($_FILES['file']);
        $test = new files();
        $test->test($_FILES['file']);
        // dump($_FILES);
        
    }
}
