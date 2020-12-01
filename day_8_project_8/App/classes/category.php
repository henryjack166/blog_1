<?php
namespace App\classes;
use App\classes\database_connect;

class category{

    public function save_image(){
/*             echo "<pre>";
            print_r($_POST);
            print_r($_FILES); */
        $category_image_name=$_FILES['images']['name'];
        $directory="images/";
        $file_location=$directory.$category_image_name;
        $pic_type=pathinfo($category_image_name.PATHINFO_EXTENSION);
        $chack=getimagesize($_FILES['images']['tmp_name']);
        if($chack){
            if(!file_exists($file_location)){
                if($pic_type){
                    if($_FILES['images']['size']<10000000){
                        move_uploaded_file($_FILES['images']['tmp_name'],$file_location);
                        return $file_location;
                    }else{
                        echo "image size is too large";
                    }
                }else{
                    echo "please select jpg and png file";
                }
            }else{
                echo "Image is alredi save";
            }
        }else{
            echo "please select image file";
        }
    }

    public function add_category($data_1){
             $file_location=category::save_image();
            $link=database_connect::connect_database();
            $sql="INSERT INTO category_list(category_name,publication_status,category_description,images) values('$data_1[category_name]','$data_1[publication_status]','$data_1[category_description]','$file_location')";
            if(mysqli_query($link,$sql)){
                $message="successfull";
            }else{
                die("query function is error".mysqli_error($link));
            }

    }

    // view category 
    public function view_category(){
        $link=database_connect::connect_database();
        $sql="SELECT * FROM category_list";
        if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("query function is error".mysqli_error($link));
        }
    }

    //edit category
    public function edit_category($id){
        $link=database_connect::connect_database();
        $sql="SELECT * FROM category_list where id='$id'";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $view_result=mysqli_fetch_assoc($result);
            return $view_result;
        }else{
            die("query function is error".mysqli_error($link));
        }
    }
}

?>