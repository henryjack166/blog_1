<?php
require_once 'vendor/autoload.php';
use app\Edit_data;
$id= $_GET['id'];
if (isset($_GET['id'])){

    $message=$test=Edit_data::edit_from_data($id);
    $view_message=mysqli_fetch_assoc($message);
}
if (isset($_POST['btn'])){
    $update=Edit_data::update_from_data($_POST,$id);
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

    <title>Hello, world!</title>
</head>
<body>


<h1>Hello, world!</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-4">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label>Full Name:</label></td>
                        <td><input type="text" name="full_name" value="<?php echo $view_message['full_name'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="email"value="<?php echo $view_message['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Phone:</label></td>
                        <td><input type="number" name="phone"value="<?php echo $view_message['phone'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label></label></td>
                        <td><input type="submit" name="btn" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>