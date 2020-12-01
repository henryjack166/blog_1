<?php 
session_start();
require_once'../../vendor/autoload.php';
use App\classes\category_function;
use App\classes\admin_logout;
if(!isset($_SESSION['id'])){
    header("location: Admin_login.php");
}
if(isset($_GET['status'])){
    if($_GET['status']=='Logout'){
        $test=admin_logout::logout_admin();
    }
}
    $message='';
if(isset($_POST['btn'])){
    $message=$test=category_function::save_category($_POST);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/front/css/heroic-features.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <?php
        include_once'../include/header.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-5">
                <h1 class="text-center text-success"><?php echo $message; ?></h1>
                <h2 class="text-center mb-5">Add Category</h2>
                <form action="" method="post">
                    <div class="from-group">
                        <label for="category_name" class="font-weight-bold">Category Name: </label>
                        <input type="text" name="category_name" class="form-control" placeholder="Category Name"
                            id="category_name">
                    </div>
                    <div class="from-group">
                        <label for="publication_status" class="font-weight-bold">publication status:</label>
                        <select name="publication_status" id="publication_status" class="form-control">
                            <option value="">Select publication status</option>
                            <option value="1">Public</option>
                            <option value="0">Unpublic</option>
                        </select>
                    </div>
                    <div class="from-group">
                        <label for="" class="font-weight-bold">Category Description: </label>
                        <textarea name="category_description" id="category_description" cols="30" rows="10"
                            class="form-control" placeholder="Category Description"></textarea>

                    </div>
                    <div class="from-group">
                        <input type="submit" name="btn" class="form-control bg-info text-light font-weight-bold"
                            value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/front/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/front/js/jquery.min.js"></script>
</body>

</html>