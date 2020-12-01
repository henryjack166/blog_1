<?php
require_once '../vendor/autoload.php';
use App\classes\Login;
if(isset($_POST['btn'])){
    $test= new Login();
    $invalid_message=$test-> save_from_data($_POST);
    //Login::save_from_data($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/front/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 bg-light mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <h3 class="text-center"><?php echo $invalid_message; ?></h3>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit"name="btn" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/front/js/jquery.min.js"></script>
    <script src="assets/front/js/bootstrap.bundle.min.js"></script>
</body>
</html>