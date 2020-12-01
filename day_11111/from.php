<?php
require_once 'vendor/autoload.php';
use \app\Save_data;
//use app\Database;
$message='';
if(isset($_POST['btn'])){
    $test= new Save_data();
    $message=$test->save_from_data($_POST);
}
?>
<hr/>
<a href="from.php">Registation From</a>
<a href="view_from.php">View Data</a>

<hr/>
<h1><?php echo $message; ?></h1>
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
                        <td><input type="text" name="full_name" id="full_name"></td>
                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><label>Phone:</label></td>
                        <td><input type="number" name="phone"></td>
                    </tr>
                    <tr>
                        <td><label></label></td>
                        <td><input type="submit" name="btn" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $("full_name").click(function (){
       $(this).css("background-color","#fff");
    });
</script>

</body>
</html>