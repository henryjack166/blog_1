<?php
namespace App\classes;
use App\classes\Database_connect;
class Blog_category_function{

    public function save_image(){
        /* echo "<pre>";
        print_r($_POST);
        print_r($_FILES); */
        $pic_name=$_FILES['picture']['name'];
        $directory="images/";
        $target_file=$directory.$pic_name;
        $pic_type=pathinfo($pic_name.PATHINFO_EXTENSION);
        $chack=getimagesize($_FILES['picture']['tmp_name']);
        if($chack){
            if(!file_exists($target_file)){
                if($pic_type){
                    if($_FILES['picture']['size'] < 100000000){
                        move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
                        return $target_file;
                    }else{
                        echo "file size is to large";
                    }
                }else{
                    echo "please input jpg and png file";
                }
            }else{
                echo "image is alrady save";
            }
        }else{
            echo "Please select image file";
        }
    }

    public function category_name(){
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM add_category_list WHERE publication_status=1";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

     /* public function category_name_blog(){
        $link=Database_connect::connect_database();
        $sql="SELECT * FROM add_category_list WHERE publication_status=1";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }
 */
    public function save_blog_category($data_1){
        $target_file=Blog_category_function::save_image();
          $link=Database_connect::connect_database();
        $sql="INSERT INTO add_blog_list(blog_title,category_id,author_name,blog_description,picture,publication_status) VALUES('$data_1[blog_title]','$data_1[category_id]','$_SESSION[name]','$data_1[blog_description]','$target_file','$data_1[publication_status]')";
        if(mysqli_query($link,$sql)){
            $message="Success full";
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function view_blog_list(){
        $link=Database_connect::connect_database();
        $sql="SELECT b.*,c.category_name from add_blog_list as b, add_category_list as c where b.category_id=c.id ORDER BY b.id ASC";
        //$sql="SELECT * FROM add_blog_list";
           if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function view_blog_category($id){
         $link=Database_connect::connect_database();
        $sql="SELECT b.*,c.category_name from add_blog_list as b, add_category_list as c where b.category_id=c.id and b.id='$id' ";
        //$sql="SELECT * FROM add_blog_list";
           if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            return $result;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function unpublished_blog_category($id){
        $link=Database_connect::connect_database();
        $sql="UPDATE add_blog_list SET publication_status=0 WHERE id='$id'";
        //$sql="SELECT * FROM add_blog_list";
           if(mysqli_query($link,$sql)){
            $message="Blog info unpublished successfull";
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }


    public function publish_blog_category($id){
         $link=Database_connect::connect_database();
        $sql="UPDATE add_blog_list SET publication_status=1 WHERE id='$id'";
        //$sql="SELECT * FROM add_blog_list";
           if(mysqli_query($link,$sql)){
            $message="Blog info published successfull";
            return $message;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }

    public function edit_blog_category($id){
        $link=Database_connect::connect_database();
        $sql="SELECT b.*,c.category_name from add_blog_list as b, add_category_list as c where b.category_id=c.id and b.id='$id'";
         if(mysqli_query($link,$sql)){
            $result=mysqli_query($link,$sql);
            $viewResult=mysqli_fetch_assoc($result);
            return $viewResult;
        }else{
            die("Query function is error".mysqli_error($link));
        }
    }
    // updat blog image 
  /*   public function update_blog_image{

    }  */

    public function update_blog_category($data_1){
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
       $image_name=$_FILES['picture']['name'];
       $link=Database_connect::connect_database();
       if($image_name){
           $blog_id=$data_1['blog_id'];
           $blog_sql="SELECT * FROM add_blog_list where id='$blog_id'";
           $queryResult=mysqli_query($link,$blog_sql);
           $bloginfo=mysqli_fetch_assoc($queryResult);
           unlink($bloginfo['picture']);
            $target_file=Blog_category_function::save_image();
            $sql="UPDATE add_blog_list SET blog_title='$data_1[blog_title]',category_id='$data_1[category_id]',blog_description='$data_1[blog_description]',picture ='$target_file',publication_status='$data_1[publication_status]'where id='$data_1[blog_id]'";
             if(mysqli_query($link,$sql)){
                header('location: manage_blog.php');
            }else{
                die("Query function is error".mysqli_error($link));
            }
       }else{
            $sql="UPDATE add_blog_list SET blog_title='$data_1[blog_title]',category_id='$data_1[category_id]',blog_description='$data_1[blog_description]',publication_status='$data_1[publication_status]'where id='$data_1[blog_id]'";
             if(mysqli_query($link,$sql)){
                header('location: manage_blog.php');
            }else{
                die("Query function is error".mysqli_error($link));
            }
            
       }
       
    }
// test php te display korbo blog_category gulu
    public function display_blog_category(){
    $link=Database_connect::connect_database();
    $sql="SELECT*from add_blog_list ";
      if(mysqli_query($link,$sql)){
                $result=mysqli_query($link,$sql);
                return  $result;
            }else{
                die("Query function is error".mysqli_error($link));
            }
    }
}

?>