<?php
namespace App\classes;
//use App\classes\data_base_connect;

class Login
{  // private $link;
    public function __construct()
    {
        $this->link=mysqli_connect('localhost','root','','blog');
    }
    public function save_from_data($data_1){
        $email=$data_1['email'];
        $password=$data_1['password'];
        $sql= "SELECT * FROM login_data where email='$email' and password='$password' ";

        if (mysqli_query($this->link,$sql)){
            $message=mysqli_query($this->link,$sql);
            $message_info= mysqli_fetch_assoc($message);
            if($message_info){
                session_start();
                $_SESSION['id']=$message_info['id'];
                $_SESSION['name']=$message_info['name'];
               header('location: deshbord.php');
            }else{
                $invalid_message="Pleas use valid user name & password";
                return $invalid_message;
            }
            die('Query Function error'.' '.mysqli_error($this->link));
        }

    }
}