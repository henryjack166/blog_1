<?php


namespace app;
use app\Database;

class Edit_data
{
    public function edit_from_data($id){
        $link=\app\Database::database_canect();
        $sql= "SELECT * FROM table_1 where id='$id'";
        if (mysqli_query($link,$sql)){
            $message=mysqli_query($link,$sql);
            return $message;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
    public function update_from_data($data_2,$id){
        $link=\app\Database::database_canect();
        $sql="UPDATE table_1 SET full_name='$data_2[full_name]',email='$data_2[email]',phone='$data_2[phone]' where id='$id' ";
        if (mysqli_query($link,$sql)){
            header("location: view_from.php");
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
}