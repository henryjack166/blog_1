<?php
session_start();
require_once'../../vendor/autoload.php';
use App\classes\category_function;

$result=$test=category_function::view_all_category();
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
    <link href="../../assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/front/css/heroic-features.css" rel="stylesheet">
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
                            <td><?php echo $viewResult['category_description']; ?></td>
                            <td><?php echo $viewResult['publication_status']; ?></td>
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
    <script src="../../assets/front/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/front/js/jquery.min.js"></script>
</body>

</html>