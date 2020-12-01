<?php
require_once 'vendor/autoload.php';
use app\View_data;
use app\Delete_from_data;
$message=$test=View_data::view_from_data();

/*if (isset($_GET['status'])){
    $id=$_GET['id'];
    if ($_GET['status']=='Delete'){
      $delete_data=Delete_from_data::delete_data($id);

    }
}*/

if(isset($_GET['status'])){
    $id=$_GET['id'];
    $delete_from_datas=Delete_from_data::delete_from_id($id);
}


?>
<hr/>
<a href="from.php">Registation From</a>
<a href="view_from.php">View Data</a>

<hr/>

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
        <div class="col-sm-8 m-auto ">
            <form action="" method="post">
                <table border="1" class="">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone
                        <th class="text-center">Action</th>
                    </tr>
                    <?php
                        while ($view_message=mysqli_fetch_assoc($message)){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $view_message['id']; ?></td>
                        <td class="text-center"><?php echo $view_message['full_name']; ?></td>
                        <td class="text-center"><?php echo $view_message['email']; ?></td>
                        <td class="text-center"><?php echo $view_message['phone']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $view_message['id']; ?>">Edit ||</a>
                            <a href="?status=Delete & id=<?php echo $view_message['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
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