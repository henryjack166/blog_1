<?php


namespace app;
use app\Database_Canect;

class edit_category_function
{
    public function edit_category($id){
        $link=Database_Canect::database_canect();
        $sql="select * from add_category where id='$id'";
        if(mysqli_query($link,$sql)){
            $message=mysqli_query($link,$sql);
            return $message;
        }else{
            die('Query Function is error'.mysqli_error($link));
        }
    }
}