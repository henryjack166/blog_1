<?php
require_once'../vendor/autoload.php';
use App\classes\login_function;
if(isset($_SESSION['id'])){
        header('location: deshbord.php');
    }
$message='';
if(isset($_POST['btn'])){
    $message=$test= login_function::login_admin($_POST);
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
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-2 mt-5 bg-info">
                <form action="" method="POST">
                    <h2 class='text-danger text-center'><?php echo $message; ?></h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="btn" class="btn btn-success btn-block mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>