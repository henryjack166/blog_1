<?php
namespace App\classes;
class database_connect{

    public function connect_database(){
        $host='localhost';
        $user_name='root';
        $password='';
        $database_name='project_8';
        $link=mysqli_connect($host,$user_name,$password,$database_name);
        return $link;
    }
}
?>