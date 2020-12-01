<?php
namespace App\classes;
use App\classes\Database_connect;
class admin_login_function{
    
    public function admin_login_chack($data){
        $email=$data['email'];
        $password=$data['password'];
        $link= Database_connect::connect_database();
        $sql="SELECT * FROM admin_list WHERE email='$email' and password='$password'";
       /*  admin_login_function::mysqli_query_canect($link,$sql); */
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
                if($viewResult){
                    session_start();
                    $_SESSION['id']=$viewResult['id'];
                    $_SESSION['name']=$viewResult['name'];
                    header('location: Deshbord.php');
                 }else{
                    $message="Email and password is incurect";
                    return $message;
        }
        
    }else{
        die("Query function is error".mysqli_error($link));
    }
  }
 
}
?>