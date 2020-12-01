<?php
session_start();
require_once'../../vendor/autoload.php';
use App\classes\category_function;
$result=$test=category_function::view_category();

if(isset($_GET['status'])){
    $id=$_GET['id'];
        $test=category_function::delete_category($id);
    
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
        include_once'../include/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2  mt-5">
                <form action="" method="post">
                    <table border="1" class="m-auto text-center">
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication status </th>
                            <th>Action</th>
                        </tr>
                        <?php
                            while($viewResult=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $viewResult['id']; ?></td>
                            <td><?php echo $viewResult['category_name']; ?></td>
                            <td><?php echo $viewResult['publication_status']; ?></td>
                            <td><?php echo $viewResult['category_description']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $viewResult['id']; ?>"><img src="img/edit.png"
                                        style="width: 15px; height: 15px;" alt=""></a> ||
                                <a href="?status=delete & id=<?php echo $viewResult['id']; ?>"><img src="img/delete.png"
                                        style="width: 15px; height: 15px;" alt=""></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>