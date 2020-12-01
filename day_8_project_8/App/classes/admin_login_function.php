<?php  
namespace App\classes;
use App\classes\database_connect;
class admin_login_function{

    // admin login chack function
    public function admin_login($data_1){
        $email=$data_1['email'];
        $password=$data_1['password'];
        $sql="SELECT * FROM admin_list where email='$email' and password='$password'";
        $link=database_connect::connect_database();
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            if($viewResult){
                session_start();
                $_SESSION['id']=$viewResult['id'];
                $_SESSION['name']=$viewResult['name'];
                header('location: Deshbord.php');
            }else{
                $message="Email & Password is incurrect";
                return $message;
            }
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    // admin logout function
    public function admin_logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: login.php');
    }
}
?>