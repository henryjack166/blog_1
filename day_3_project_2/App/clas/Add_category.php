<?php


namespace App\clas;
use App\clas\Database;

class Add_category
{
    public function mysqli_canect($sql){
        $link=Database::Database_canect();
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
    }
    public function save_category($data_1){
        //$status='select';
        $mysql="insert into add_category(add_catagory,publication_status,blog_description) values ('$data_1[add_catagory]','$data_1[publication_status]','$data_1[blog_description]')";
        Add_category::mysqli_canect($mysql);
    }
    public function view_category(){
        //$status='select';
        $mysqli="SELECT * FROM add_category";
        Add_category::mysqli_canect($mysqli);
    }
    public function view_categoryes(){
        $link=\App\clas\Database::Database_canect();
        $mysqli="SELECT * FROM add_category";
        if(mysqli_query($link,$mysqli)){
            $result=mysqli_query($link,$mysqli);
            return $result;
        }else{
            die('Query function is error'.mysqli_error($link));
        }
        //Add_category::mysqli_canect($mysqli);
    }

    public function delete_category($id){
        /*$link= Database::Database_canect();
        $sql= "DELETE FROM add_category WHERE id='$id'";
        if (mysqli_query($link,$sql)){
            header('location: View_category.php');
        }else{
            die('Query function is error'.mysqli_error($link));
        }*/
        echo "hellow";
    }
}