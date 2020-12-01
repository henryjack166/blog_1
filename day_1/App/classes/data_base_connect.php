<?php


namespace App\classes;


class data_base_connect
{
    public function bd_conect(){
        $hostName='localhost';
        $user_name='root';
        $password='';
        $dbase='blog';
        $link= mysqli_connect($hostName,$user_name,$password);
        return $link;
    }
}