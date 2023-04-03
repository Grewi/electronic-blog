<?php 
namespace app\controllers\files;
use app\models\files_category;

class files
{
    public function category($parent = 0)
    {
        $category = files_category::all();
        $parent = [];
        
        foreach($category as $i){
            $parent[$i->parent] = $i;
        }

        // $result = [];
        // function($parent_id, $level){
        //     if(isset($parent[$parent_id])){

        //     }
        // }
        // return ;
    }
}
