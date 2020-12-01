<?php
namespace App\classes;
use App\classes\Database_connect;
use mysqli;

class Blog_category_function{

    public function save_block_image(){
       /*  echo "<pre>";
        print_r($_POST);
        print_r($_FILES); */
        $image_name=$_FILES['blog_img']['name'];
        $directory="images/";
        $target_file=$directory.$image_name;
        $image_type=pathinfo($image_name.PATHINFO_EXTENSION);
        $chack=getimagesize($_FILES['blog_img']['tmp_name']);
        if($chack){
            if(!file_exists($target_file)){
                if($image_type){
                    if($_FILES['blog_img']['size']){
                        move_uploaded_file($_FILES['blog_img']['tmp_name'],$target_file);
                        return $target_file;
                    }else{
                        echo "Image size is too large";
                    }
                }else{
                    echo "please input jpg and png file.";
                }
            }else {
                echo "File is alredi heare";
            }
        }else{
            echo "Please select image file";   
        }


    }

    public function add_category_name_in_blog(){
        $link=Database_connect::connect_database();
        $sql="SELECT category_name,id FROM category_list where publication_status=1";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function save_blog_category($data){
        $target_file=Blog_category_function::save_block_image();
        $link=Database_connect::connect_database();
        $sql="INSERT INTO blog_list (blog_title,category_id,blog_description,blog_img,publication_status) VALUE('$data[blog_title]','$data[category_id]','$data[blog_description]','$target_file','$data[publication_status]')";
     if(mysqli_query($link,$sql)){
            $message='successfull';
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function view_mavage_blog(){
        $link=Database_connect::connect_database();
        $sql="SELECT b.*,c.category_name from category_list as c,blog_list as b where b.category_id=c.id";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function edit_category($id){
        $link=Database_connect::connect_database();
        $sql="SELECT b.*,c.category_name from category_list as c,blog_list as b where b.category_id=c.id and b.id='$id'";
          if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
}
}
?>