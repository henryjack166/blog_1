<?php
require_once '../../vendor/autoload.php';
use app\View_manage_category;
use app\Delete_manage_category;
$message= $test= View_manage_category::view_category();

if (isset($_GET['status'])){
        $ID=$_GET['id'];
        $test= Delete_manage_category::delete_manage_category($ID);

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../assets/front/css/bootstrap.min.css" rel="stylesheet">


    <title>Hello, world!</title>
</head>
<body>
<?php
session_start();
include_once '../include/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8  offset-sm-2 mt-5">
            <table border="1" class="table table-striped text-center">
                <thead><h2 class="text-center mb-4">View category list</h2></thead>
                <tr class="">
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Publisher</th>
                    <th>Description</th>
                <th>Action</th>

                </tr>
                <?php
                    while ($viewMessage=mysqli_fetch_assoc($message)){
                ?>
                <tr>
                    <td><?php echo $viewMessage['id']; ?></td>
                    <td><?php echo $viewMessage['add_catagory']; ?></td>
                    <td><?php echo $viewMessage['publication_status']; ?></td>
                    <td><?php echo $viewMessage['blog_description']; ?></td>
                    <td>
                        <a href="edit_category.php?id=<?php echo $viewMessage['id']; ?>"> <img src="img/15071590061574055268-128.PNG" style="width: 15px; height: 15px"></ion-icon> ||</a>
                        <a href="?status=Delete & id=<?php echo $viewMessage['id']; ?>"><ion-icon name="trash-outline" ><img src="img/14974663671582988848-128.PNG" style="width: 15px; height: 15px"></ion-icon></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
