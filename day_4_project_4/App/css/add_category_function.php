<?php
//require_once'../../vendor/autoload.php';
namespace App\css;
use App\css\Database_connect;

class add_category_function{
    public function save_category($data_1){
        $link= Database_connect::connect_database();
        $sql="INSERT INTO add_category(add_catagory,publication_status,blog_description) VALUES('$data_1[add_catagory]','$data_1[publication_status]','$data_1[blog_description]')";
        if(mysqli_query($link,$sql)){
            $message= "success full ";
            return $message;
        }else{
            die("query error".mysqli_error());
        }
        
    }
    public function view_category(){
        $link=Database_connect::connect_database();
         $sql="SELECT * FROM add_category";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_errno($link));
        } 
       
    }
    public function edit_category($ID){
         $link= Database_connect::connect_database();
        $sql="SELECT* FROM add_category WHERE id='$ID'";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
    public function delete_category($id){
        $link= Database_connect::connect_database();
        
        $sql="DELETE FROM add_category WHERE id='$id'";
        if(mysqli_query($link,$sql)){
            header("location: manage_category.php");
        }else{
            die("query function is error".mysqli_error($link));
        }
    }

    public function update_category($data_1,$id)
    {
             $link= Database_connect::connect_database();
             $sql="UPDATE add_category SET add_catagory='$data_1[add_catagory]',publication_status='$data_1[publication_status]',blog_description='$data_1[blog_description]' where id='$id'";
              if(mysqli_query($link,$sql)){

            header("location: manage_category.php");
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
    public function select_category(){
        $link= Database_connect::connect_database();
        $sql="SELECT * FROM add_category WHERE  publication_status=1";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
            
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
}

?>