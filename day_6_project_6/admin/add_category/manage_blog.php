<?php
session_start();
require_once'../../vendor/autoload.php';
use App\classes\Blog_category_function;
$result=$test=Blog_category_function::view_mavage_blog();


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
            <div class="col-sm-12  mt-5">
                <form action="" method="post">
                    <table border="1" class="m-auto">
                        <h2 class="text-center mb-3">Manage Blog</h2>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Blog Title</th>
                            <th class="text-center">Category Name</th>
                            <!-- <th class="text-center">Author name</th> -->
                            <th class="text-center">Blog Description</th>
                            <th class="text-center">image</th>
                            <th class="text-center">Publication status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php 
                            while($viewResult=mysqli_fetch_assoc($result)){
                        ?>
                        <tr class="">
                            <td class="text-center"><?php echo $viewResult['id']; ?></td>
                            <td class="text-center"><?php echo $viewResult['blog_title']; ?></td>
                            <td class="text-center"><?php  echo $viewResult['category_name']; ?></td>
                            <td class="text-center"><?php  echo $viewResult['blog_description']; ?></td>
                            <td class="text-center"><img src="<?php echo $viewResult['blog_img']; ?>" alt="image"
                                    style="width: 100px; height:100px;"></td>
                            <td class="text-center"><?php echo $viewResult['publication_status']; ?></td>
                            <td class="text-center">
                                <a href="edit_blog_category.php?id=<?php echo $viewResult['id'];?>"><img
                                        src="img/edit.png" style="width: 20px; height: 20px;" alt="">
                                </a>
                                <a href="edit_blog_category.php ?id=<?php echo $viewResult['id']; ?>"><img
                                        src="img/view.png" style="width: 20px; height: 20px;" alt=""></a>
                                <a href="" class=" btn
                                    btn-success"><img src="img/cloud-computing.png" style="width: 20px; height: 20px;"
                                        alt=""></a>

                                <a href="" class=" btn
                                    btn-danger"><img src="img/cloud-computing.png" style="width: 20px; height: 20px;"
                                        alt=""></a>

                                <a href="edit.php"><img src="img/delete.png" style="width: 20px; height: 20px;"
                                        alt=""></a>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/front/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/front/js/jquery.min.js"></script>
</body>

</html>