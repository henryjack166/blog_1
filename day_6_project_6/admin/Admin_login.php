<?php
session_start();
require_once'../vendor/autoload.php';
use App\classes\admin_login_function;
if(isset($_SESSION['id'])){
    header("location: Deshbord.php");
}
$message='';
    if(isset($_POST['btn'])){
        $message=$test=admin_login_function::admin_login_chack($_POST);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/front/css/heroic-features.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row bg-light">
            <div class="col-sm-8 offset-sm-2 mt-5">
                <form action="" method="post">
                    <h2 class="text-danger text-center"><?php echo $message; ?></h2>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">

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
                    <button type="submit" class="btn btn-primary btn-block mb-3 mt-3" name="btn">Submit</button>
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