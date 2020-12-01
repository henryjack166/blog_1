<?php

namespace app;
use app\Database_Canect;

class Save_add_category
{
    public function save_add_category_from($data_1){
        $link=Database_Canect::database_canect();
        $sql="insert into add_category(add_catagory,publication_status,blog_description) values ('$data_1[add_catagory]','$data_1[publication_status]','$data_1[blog_description]')";
        if (mysqli_query($link,$sql)){
            $message="success full";
            return $message;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
}