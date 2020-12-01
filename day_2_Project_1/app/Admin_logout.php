<?php
namespace app;

class Admin_logout
{
    public function logout_admin(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: admin_login.php');
    }
}