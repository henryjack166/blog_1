<?php

namespace App\css;
use App\css\Database_connect;
class Admin_login_function{

    public function admin_login($data_1){
        $link= Database_connect::connect_database();
        $email=$data_1['email'];
        $password=$data_1['password'];
        $sql="SELECT * FROM save_admin_login_data where email='$email' and password='$password'";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            if($viewResult){
                session_start();
                $_SESSION['id']= $viewResult['id'];
                $_SESSION['name']= $viewResult['name'];
                header('location: Deshbord.php');
            }else{
                $message="Email and Password is incurrect!";
                return $message;
            }
        }else{
            die("Query function is error".mysqli_errno($link));
        }

    }

    public function logout_admin(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: Login.php');
    }
}

?>