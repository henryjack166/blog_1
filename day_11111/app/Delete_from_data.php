<?php
//require_once 'vendor/autoload.php';

namespace app;
use app\Database;


class Delete_from_data
{
//    public function delete_data($id){
//        $link=Database::database_canect();
//        $sql="DELETE FROM table_1 WHERE id='$id'";
//        if (mysqli_query($link,$sql)){
//            header("location: view_from.php");
//        }else{
//            die('Query function is error'.mysqli_error($link));
//        }
//
//    }

    public function delete_from_id($id){
        $link=Database::database_canect();
        $sql="DELETE FROM table_1 WHERE id='$id'";
        if (mysqli_query($link,$sql)){
            header("location: view_from.php");
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }

}