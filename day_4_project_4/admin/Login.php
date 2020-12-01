<?php
session_start();    
require_once'../vendor/autoload.php';
use App\css\Admin_login_function;
if(isset($_SESSION['id'])){
    header('location: Deshbord.php');
}
$message='';
if(isset($_POST['btn'])){
$message=$test= Admin_login_function::admin_login($_POST);

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/front/css/heroic-features.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-5 bg-success">
                <form action="" method="post" class="">
                    <h2 class="text-center text-danger"><?php echo $message; ?></h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary btn-block mb-3 mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="../assets/front/css/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../assets/front/css/jquery.min.js">
</body>

</html>