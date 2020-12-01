<?php
session_start();
require_once'../../vendor/autoload.php';
use App\classes\Blog_category_function;
$id=$_GET['id'];
$result=$test=Blog_category_function::view_blog_category($id);
$viewResult=mysqli_fetch_assoc($result);
/* echo "<pre>";
print_r($viewResult); */
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
                    <table border="1" class="table table-striped table-dark">
                        <h2 class="text-center">Manage Blog</h2>
                        <tr>
                            <th class="">Blog Id</th>
                            <td><?php echo $viewResult['id']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Category Id</th>
                            <td><?php echo $viewResult['category_id']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Blog Title</th>
                            <td><?php echo $viewResult['blog_title']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Category Name</th>
                            <td><?php echo $viewResult['category_name']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Author name</th>
                            <td><?php echo $viewResult['author_name']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Blog Description</th>
                            <td><?php echo $viewResult['blog_description']; ?></td>
                        </tr>
                        <tr>
                            <th class="">Picture</th>
                            <td><img src="<?php echo $viewResult['picture']; ?>" alt="image"
                                    style="width: 550px; height:400px;"></td>
                        </tr>
                        <tr>
                            <th class="">Publication status</th>
                            <td><?php echo $viewResult['publication_status']==1 ? 'Published': 'Unpublished'; ?></td>
                        </tr>

                        <!-- <th class="text-center">Author name</th>
                        <th class="text-center">Blog Description</th>
                        <th class="text-center">Publication status</th> -->
                        <!-- <th class="text-center">Action</th> -->

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