<?php
session_start();
require_once '../vendor/autoload.php';
use App\clas\Add_category;
$message='';
if(isset($_POST['btn'])){
    $message= $test= Add_category::save_category($_POST);
}
use App\clas\admin_function;
if (!isset($_SESSION['id'])){
    header('location: admin_login.php');
}
if(isset($_GET['status'])){
    if($_GET['status']=='Logout'){
        $test= admin_function::admin_logout();
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php

include_once 'include/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 bg-light mt-5">
            <h1 id="add_success"><?php  ?></h1>
            <h4 class="text-center">Add Category</h4>
            <form action="" method="post">
                <h2><?php echo $message; ?></h2>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Catagory Name</label>
                    <input type="text" required name="add_catagory" class="form-control" id="exampleFormControlInput1" placeholder="catagory Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Puplication status</label>
                    <select class="form-control" required name="publication_status" id="exampleFormControlSelect1">
                        <option>Select publication status</option>
                        <option value="1">Public</option>
                        <option value="0">Unpublic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Category description</label>
                    <textarea class="form-control" name="blog_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-control">
                    <input type="submit" name="btn" value="Submit" id="update_success" class="btn-block">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
   /* $('#update_success').click(function (){
        alert("success full!");
    });*/
</script>
</body>
</html>