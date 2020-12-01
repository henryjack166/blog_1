<?php
namespace App\classes;
class Database_connect{

    public function connect_database()
   {
    $hostName="localhost";
    $userName="root";
    $password="";
    $data_base_name="day_6_project_6";
    $link=mysqli_connect($hostName,$userName,$password,$data_base_name);
    return $link;
   }
}
?>