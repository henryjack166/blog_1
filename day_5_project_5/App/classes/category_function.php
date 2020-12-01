<?php
namespace App\classes;
use App\classes\Database_connect;
class category_function{

    public function save_category($data_1){
        $link=Database_connect::connect_database();
        $sql="INSERT INTO add_category_list(category_name,publication_status,category_description) VALUES('$data_1[category_name]','$data_1[publication_status]','$data_1[category_description]')";
        if(mysqli_query($link,$sql)){
            $message="Success full";
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function view_category(){
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM add_category_list";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function edit_category($id){
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM add_category_list WHERE id='$id'";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            return $viewResult;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function update_category($data_1,$id){
         $link=Database_connect::connect_database();
        /* $sql="UPDATE add_category_list SET 	category_name='$data_1[category_name]', publication_status='$data_1[publication_status]',category_description='$data_1[	category_description]' WHERE id='$id'"; */

       $sql="UPDATE add_category_list SET category_name='$data_1[category_name]',publication_status='$data_1[publication_status]',category_description='$data_1[category_description]' where id='$id'";
         if(mysqli_query($link,$sql)){
            $result="successfull";
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function delete_category($id){
         $link=Database_connect::connect_database();
         $sql="DELETE FROM add_category_list WHERE id='$id'";
         if(mysqli_query($link,$sql)){
            header('location: manage_category.php');
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }
}
?>