<?php
namespace App\classes;
use App\classes\Database_connect;

class login_function{

    //admin login start
    public function login_admin($data_1){
        $email=$data_1['email'];
        $password=$data_1['password'];
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM admin_list where email='$email' and password='$password'";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
             $view_result=mysqli_fetch_assoc($result);
            if($view_result){
                session_start();
                $_SESSION['id']=$view_result['id'];
                $_SESSION['name']=$view_result['name'];
                header('location: deshbord.php');
            }else{
                $message='Email and password is incuract';
                return $message;
            } 
            
        }else{
            die("Query function is error".mysqli_error($link));
        }
    } // admin login end code

    // admin Logout stat code
    public function logout_admin(){
        
        echo "Hellow nahidul";
    }
      
}


?>