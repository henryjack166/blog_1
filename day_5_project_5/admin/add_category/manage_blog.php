<?php
session_start();
require_once'../../vendor/autoload.php';
use App\classes\Blog_category_function;
$result=$test=Blog_category_function::view_blog_list();

if(isset($_GET['status'])){
    $id=$_GET['id'];
    if($_GET['status']=='unpublished'){
        $message=$test=Blog_category_function::unpublished_blog_category($id);
    }else if($_GET['status']=='publish'){
        $message=$test=Blog_category_function::publish_blog_category($id);
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
            <div class="col-sm-12  mt-5">
                <form action="" method="post">
                    <table border="1" class="m-auto">
                        <h2 class="text-center mb-3">Manage Blog</h2>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Blog Title</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Author name</th>
                            <!-- <th class="text-center">Blog Description</th> -->
                            <th class="text-center">Publication status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php while($viewResult=mysqli_fetch_assoc($result)){ ?>
                        <tr class="">
                            <td class="text-center"><?php echo $viewResult['id']; ?></td>
                            <td class="text-center"><?php echo $viewResult['blog_title']; ?></td>
                            <td class="text-center"><?php echo $viewResult['category_name']; ?></td>
                            <td class="text-center"><?php echo $viewResult['author_name']; ?></td>
                            <!-- <td class="text-center"><?php //echo $viewResult['blog_description']; ?></td> -->
                            <td class="text-center"><?php echo $viewResult['publication_status']; ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $viewResult['id']; ?>"><img src="img/edit.png"
                                        style="width: 20px; height: 20px;" alt=""> </a>
                                <a href=" view_blog.php?id=<?php echo $viewResult['id']; ?>"><img src="img/view.png"
                                        style="width: 20px; height: 20px;" alt=""></a>
                                <?php if($viewResult['publication_status']==1){?>
                                <a href="?status=unpublished&id=<?php echo $viewResult['id']; ?>"" class=" btn
                                    btn-success"><img src="img/cloud-computing.png" style="width: 20px; height: 20px;"
                                        alt=""></a>
                                <?php }else{?>
                                <a href="?status=publish&id=<?php echo $viewResult['id']; ?>" class=" btn
                                    btn-danger"><img src="img/cloud-computing.png" style="width: 20px; height: 20px;"
                                        alt=""></a>
                                <?php }?>
                                <a href="edit.php?id=<?php  ?>"><img src="img/delete.png"
                                        style="width: 20px; height: 20px;" alt=""></a>
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