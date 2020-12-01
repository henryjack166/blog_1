<?php
namespace app;
use app\Database;
class Save_data
{
    public function save_from_data($data_2){
        $link=\app\Database::database_canect();
        $sql="insert into table_1(full_name,email,phone) values ('$data_2[full_name]','$data_2[email]','$data_2[phone]')";
        if (mysqli_query($link,$sql)){
            $message='Success full';
            return $message;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
}