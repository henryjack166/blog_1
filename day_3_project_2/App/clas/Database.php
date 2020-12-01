<?php
namespace App\clas;
class Database{
    public function Database_canect(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $Database_name='blog';
        $link=mysqli_connect($hostName,$userName,$password,$Database_name);
        return $link;
    }
}
?>