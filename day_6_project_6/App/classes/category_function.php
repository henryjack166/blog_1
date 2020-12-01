<?php
namespace App\classes;
use App\classes\Database_connect;
class category_function{
    //public $connect=Database_connect::connect_database();
     public function save_category($data){
        $link=Database_connect::connect_database();
        $sql="INSERT INTO category_list(category_name,category_description,publication_status) VALUE('$data[category_name]','$data[category_description]','$data[publication_status]')";
     if(mysqli_query($link,$sql)){
            $message='successfull';
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }                                                                            
    }
    public function view_all_category(){
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM category_list";
            if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        } 
    }
    public function edit_category($id){
           $link=Database_connect::connect_database();
           $sql="SELECT * FROM category_list where id='$id'";
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
        $sql="UPDATE category_list SET category_name='$data_1[category_name]',category_description='$data_1[category_description]',publication_status='$data_1[publication_status]' where id='$id'";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
           header('location: manage_category.php');
        }else{
            die("Query function is error".mysqli_error($link));
        } 
    }
    public function delete_category($id){
        $link=Database_connect::connect_database();
        $sql="DELETE from category_list where id='$id'";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
           header('location: manage_category.php');
        }else{
            die("Query function is error".mysqli_error($link));
        } 
    }

    public function edit_blog_category($id){
        $link=Database_connect::connect_database();
        /* $sql="SELECT b.*,c.category_name from blog_list as b, category_list as c where b.category_id=c.id and id='$id' "; */
        /* $sql="SELECT b.*,c.category_name from category_list as c,blog_list as b where b.category_id=c.id and b.id='$id'"; */
        $sql="SELECT b.*,c.category_name from blog_list as b, category_list as c where b.category_id=c.id and b.id='$id'";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
           return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        } 
    }

    
    

}
?>