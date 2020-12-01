<?php
require_once '../vendor/autoload.php';
use App\clas\admin_function;

if (isset($_SESSION['id'])){
    header('location: Deshbord.php');
}
$infoMessage='';
if(isset($_POST['btn'])){
    $infoMessage=$test= admin_function::mysqli_connect($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/front/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #fa8072;
    }
    </style>

</head>

<body>
    <?php
   // include_once 'include/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 bg-secondary mt-5">
                <form action="" method="post">
                    <h1 class="text-center text-danger text-danger"><?php echo $infoMessage; ?></h1>
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
                    <button type="submit" name="btn" class="btn btn-primary btn-block mt-2 mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/front/js/jquery.min.js"></script>
    <script src="../assets/front/js/bootstrap.bundle.min.js"></script>
</body>

</html>