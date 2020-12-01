<?php

namespace App\classes;


class admin_logout
{
    public function admin_logout_from(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: index.php');
    }
}