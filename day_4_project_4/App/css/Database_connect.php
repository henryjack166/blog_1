<?php
namespace App\css;
class Database_connect{

    public function connect_database(){
        $hostname='localhost';
        $user='root';
        $password='';
        $database_name='blog';
        $link=mysqli_connect($hostname,$user,$password,$database_name);
        return $link;
    }
}
?>