<?php


namespace app;


class Database
{
    public function database_canect(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $database_name='blog';
        $link=mysqli_connect($hostName,$userName,$password,$database_name);
        return $link;
    }
}