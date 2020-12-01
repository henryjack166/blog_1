<?php


namespace app;
use app\View_data;

class View_data
{
    public function view_from_data(){
        $link=Database::database_canect();
        $sql="select * from table_1";
        if (mysqli_query($link,$sql)){
            $message=mysqli_query($link,$sql);
            return $message;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
}