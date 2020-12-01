<?php
namespace App\classes;
class admin_logout{

       public function logout_admin(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("location: Admin_login.php");
    }
}

?>