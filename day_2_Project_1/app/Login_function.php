<?php
namespace app;
use app\Database_Canect;
class Login_function
{
    public function login_function_admin($data_1){
        $email= $data_1['email'];
        $password= $data_1['password'];
        $sql="select * from save_admin_login_data where email='$data_1[email]' and password='$data_1[password]' ";
        $link= \app\Database_Canect::database_canect();
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            if ($viewResult){
                $_SESSION['id']= $viewResult['id'];
                $_SESSION['name']= $viewResult['name'];
                header("location: Deshbord.php");
            }else
                $message="Please tray aggin";
            return $message;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
}