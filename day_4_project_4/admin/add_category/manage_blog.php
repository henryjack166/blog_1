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

$Row=$test=Blog_function::view_blog_info();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
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
            <div class="col-sm-8  offset-sm-2 mt-5">
                <table border="1" class="table table-striped text-center">
                    <thead>
                        <h2 class="text-center mb-4">View category list</h2>
                    </thead>
                    <tr class="">
                        <th>ID</th>
                        <!-- <th>Category id</th> -->
                        <th>Blog Title</th>
                        <th>Auther_name</th>
                        <th>Category Name</th>
                        <th>Blog Description</th>
                        <th>Publication status</th>
                        <th>Action</th>

                    </tr>
                    <?php
               
                        while($viewResult=mysqli_fetch_assoc($Row)){
                    ?>
                    <tr>

                        <td><?php echo $viewResult['id']; ?></td>
                        <!-- <td><?php //echo $viewResult['category_id']; ?></td> -->
                        <td><?php echo $viewResult['blog_title']; ?></td>
                        <td><?php echo $viewResult['auther_name']; ?></td>
                        <td><?php echo $viewResult['add_catagory']; ?></td>
                        <td><?php echo $viewResult['blog_description']; ?></td>
                        <td><?php echo $viewResult['publication_status']; ?></td>

                        <td>
                            <a href="Edit_category.php"> <img src="img/15071590061574055268-128.PNG"
                                    style="width: 15px; height: 15px"></ion-icon>
                                ||</a>
                            <a href=""=<?php  ?>>
                                <ion-icon name="trash-outline"><img src="img/14974663671582988848-128.PNG"
                                        style="width: 15px; height: 15px"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <?php
                       }
                ?>
                </table>
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
</body>

</html>