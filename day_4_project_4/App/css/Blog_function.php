<?php
namespace App\css;
use App\css\Database_connect;

class Blog_function{
    public function save_image(){
       /*  echo "<pre>";
        print_r($_POST);
        print_r($_FILES); */
        $pic_name=$_FILES['blog_image']['name'];
        $director= 'images/';
        $target_file=$director.$pic_name;
        $file_type=pathinfo($pic_name,PATHINFO_EXTENSION);
        $chack=getimagesize($_FILES['blog_image']['tmp_name']);
        if($chack){
            if(!file_exists($target_file)){
                if($file_type=='jpg' || $file_type=='png'){
                if($_FILES['blog_image']['size']<1000000){
                    move_uploaded_file($_FILES['blog_image']['tmp_name'],$target_file);
                    return $target_file;
                }else{
                   echo("Your file size is too large. Thanks!!!");
                }
            }else{
                echo("Please use jpg or png image file. Thanks!!");
            }
            }else{
                echo("file already exist. thanks!!!");
            }
        }else{
            echo("please use an image file. Thanks!!!");
        }
    }
    public function save_blog($data_1){
        $target_=Blog_function::save_image();
        $link= Database_connect::connect_database();
    $sql="INSERT INTO save_blog(category_id,blog_title,auther_name,blog_image,blog_description,publication_status) VALUES('$data_1[category_id]','$data_1[blog_title]','$_SESSION[name]','$target_','$data_1[blog_description]','$data_1[publication_status]')";
        if(mysqli_query($link,$sql)){
            $Result="Blog info save successfully";
            return $Result;
            
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
    
    public function view_blog_info(){
        $link= Database_connect::connect_database();
        $sql="SELECT b.*,c.add_catagory FROM save_blog as b, add_category as c where b.category_id= c.id";
        if(mysqli_query($link,$sql)){
            $Row=mysqli_query($link,$sql);
            return $Row;
            
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
    public function tray_category(){
        $link= Database_connect::connect_database();
        $sql="SELECT * FROM save_blog where 	publication_status=1";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
            
        }else{
            die("query function is error".mysqli_error($link));
        }
    }

}

?>