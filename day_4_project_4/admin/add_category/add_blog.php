 <?php
session_start();
require_once'../../vendor/autoload.php';
use App\css\add_category_function;
use App\css\Blog_function;
/* use App\css\Admin_login_function;

if(!isset($_SESSION['id'])){
    header('location: Login.php');
}
if(isset($_GET['status'])){
    if($_GET['status']=='Logout'){
        $test= Admin_login_function::logout_admin();
    }
} */


 $result=$test=add_category_function::select_category();
 $Result='';
 if(isset($_POST['btn'])){
     $Result=$test=Blog_function::save_blog($_POST);
 }

?>
 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 </head>

 <body>
     <?php

include_once '../include/header.php';
?>
     <hr />
     <a href="add_category.php">Add category</a>|
     <a href="manage_category.php">Manage category</a>|
     <a href="add_blog.php">Add Blog</a>|
     <a href="manage_blog.php">Manage Blog</a>
     <hr />
     <div class="container">
         <div class="row">
             <div class="col-sm-8 offset-sm-2 bg-light mt-5">
                 <h4 class="text-center">Add Blog</h4>
                 <form action="" method="post" enctype="multipart/form-data">
                     <h2><?php echo $Result; ?></h2>
                     <div class="form-group">
                         <label for="exampleFormControlInput1">Blog Title</label>
                         <input type="text" required name="blog_title" class="form-control"
                             id="exampleFormControlInput1" placeholder="Blog Title">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlSelect1">Category Name</label>
                         <select class="form-control" name="category_id" required name="publication_status"
                             id="exampleFormControlSelect1">
                             <option>Select publication status</option>
                             <?php  while($viewResult=mysqli_fetch_assoc( $result)){?>
                             <option value="<?php echo $viewResult['id']; ?>">
                                 <?php echo $viewResult['add_catagory']; ?></option>

                             </option>
                             <?php
                                }
                             ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Blog description</label>
                         <textarea class="form-control" name="blog_description" id="exampleFormControlTextarea1"
                             rows="3"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="">Blog Image</label>
                         <input type="file" name="blog_image" accept="image/*">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlSelect1">Publication Status</label>
                         <select class="form-control" required name="publication_status" id="exampleFormControlSelect1">
                             <option>Select publication status</option>
                             <option value="1">Public</option>
                             <option value="0">Unpublic</option>
                         </select>
                     </div>
                     <div class="form-control">
                         <input type="submit" name="btn" value="Submit" id="update_success" class="btn-block btn-info">
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
     <script>
     /* $('#update_success').click(function (){
        alert("success full!");
    });*/
     </script>
 </body>

 </html>