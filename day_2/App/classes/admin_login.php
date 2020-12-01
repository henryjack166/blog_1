<?php


namespace App\classes;
use App\classes\Database;


class admin_login
{
    /*public function __construct()
    {

    }*/
    public function save_data($data_1){
        $email=$data_1['email'];
        $password=$data_1['password'];
        $link=Database::database_connect();
        $sql= "select * from login_data where email='$email' and password='$password'";
        if (mysqli_query($link,$sql)){
            $message=mysqli_query($link,$sql);
            $message_info=mysqli_fetch_assoc($message);
            if($message_info){
                session_start();
                $_SESSION['id']=$message_info['id'];
                $_SESSION['name']= $message_info['name'];
                header('location: deshbord.php');
            }else{
                $invelid="Email & Password is incarect";
                return $invelid;
            }
            die('Query function is error'.mysqli_error($link));
        }
    }
}