<?php
session_start();
require_once'../vendor/autoload.php';
use App\css\Admin_login_function;
if(!isset($_SESSION['id'])){
    header('location: Login.php');
}
if(isset($_GET['status'])){
    if($_GET['status']=='Logout'){
        $test= Admin_login_function::logout_admin();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
       include_once'include/header.php';
    ?>
    <hr />
    <a href="add_category/add_category.php">Add category</a>|
    <a href="add_category/manage_category.php">Manage category</a>|
    <a href="add_category/add_blog.php">Add Blog</a>|
    <a href="add_category/manage_blog.php">Manage Blog</a>
    <hr />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>