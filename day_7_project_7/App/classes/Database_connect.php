<?php
namespace App\classes;
class Database_connect{

    public function connect_database(){
        $Host_name='localhost';
        $user_name='root';
        $password='';
        $database_name="project_7";
        $link=mysqli_connect($Host_name,$user_name,$password,$database_name);
        return $link;
    }
}
?>