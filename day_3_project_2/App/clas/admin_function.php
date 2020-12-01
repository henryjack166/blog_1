<?php
namespace App\clas;
use App\clas\Database;
class admin_function{
    public function __construct()
    {

    }
    public function mysqli_connect($data_1){
        $link= \App\clas\Database::Database_canect();
        $email=$data_1['email'];
        $password=$data_1['password'];
        $sql="select * from save_admin_login_data where email='$email' and password='$password'" ;
        if(mysqli_query($link,$sql)){
            $result= mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            if($viewResult){
                session_start();
                $_SESSION['id']=$viewResult['id'];
                $_SESSION['name']=$viewResult['name'];
                header('location: Deshbord.php');
            }else{
                $infoMessage="Please try agin invalid email and password";
                return $infoMessage;
            }
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }

    public function admin_logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: admin_login.php');
    }

}
?>