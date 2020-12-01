<?php


namespace app;
use app\Database_Canect;

class Delete_manage_category
{
    public function delete_manage_category($id){
        $link=Database_Canect::database_canect();
        $sql="delete from add_category where id='$id'";
        if(mysqli_query($link,$sql)){
            header('location: Manage_category.php');
        }else{
            die('Query Function is error'.mysqli_error($link));
        }


    }
}