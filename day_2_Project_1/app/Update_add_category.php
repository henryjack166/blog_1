<?php


namespace app;
use app\Database_Canect;

class Update_add_category
{
    public function update_category($data_1,$id){
        $link=\app\Database_Canect::database_canect();
        $sql="update add_category set add_catagory='$data_1[add_catagory]', publication_status='$data_1[publication_status]',blog_description='$data_1[blog_description]' where id='$id'";
        if(mysqli_query($link,$sql)){
            $message="success full";
            header('location: Manage_category.php');
        }else{
            die('Query Function is error'.mysqli_error($link));
        }
    }
}