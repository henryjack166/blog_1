<?php


namespace App\classes;


class Database
{
    public function database_connect(){
        $hostName='localhost';
        $user='root';
        $password='';
        $database='blog';
        $link=mysqli_connect($hostName,$user,$password,$database);
        return $link;

    }
}