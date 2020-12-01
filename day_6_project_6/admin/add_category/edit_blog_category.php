<?php 
session_start();
require_once'../../vendor/autoload.php';
use App\classes\Blog_category_function;
use App\classes\category_function;
$id=$_GET['id'];
$result=$test=Blog_category_function::add_category_name_in_blog();
$viewResult=mysqli_fetch_assoc($result);
if(isset($_GET['id'])){
   $result=$test=category_function::edit_blog_category($id);
   $viewResult=mysqli_fetch_assoc($result);
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
            <div class="col-sm-8 offset-sm-2 mt-5">
                <h2 class="text-center mb-5"><?php //echo $message; ?></h2>
                <h2 class="text-center mb-5">Edit Blog</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="blog_title" class="font-weight-bold">Blog Title: </label>
                        <input type="text" name="blog_title" class="form-control" id="blog_title"
                            value="<?php echo $viewResult['blog_title']; ?>">
                        <input type="hidden" name="blog_id" class="from-control" id="blog_id" value="<?php ?>">
                    </div>
                    <div class="from-group">
                        <label for="category_id" class="font-weight-bold">Category Name: </label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value=""><?php echo $viewResult['category_name']; ?></option>
                            <?php  while($viewResult=mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $viewResult['id']; ?>">
                                <?php echo $viewResult['category_name']; ?>
                            </option>
                            <!-- <option value="0">Unpublic</option> -->
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="from-group">
                        <label for="" class="font-weight-bold">Blog Description: </label>
                        <textarea name="blog_description" id="blog_description" cols="30" rows="10"
                            class="form-control"><?php  ?></textarea>
                    </div>
                    <div class="from-group">
                        <label for="">File Upload</label>
                        <input type="file" name="blog_img" accept="image/*">
                        <img src="<?php  echo $viewResult['blog_img']; ?>" alt="image"
                            style="width: 100px, hietht:100px;">
                    </div>
                    <div class="from-group">
                        <label for="publication_status" class="font-weight-bold">publication status:</label>
                        <select name="publication_status" id="publication_status" class="form-control">
                            <option value="">Select publication status</option>
                            <option value="1">Public</option>
                            <option value="0">Unpublic</option>
                        </select>
                    </div>
                    <div class="from-group">
                        <input type="submit" name="btn" class="form-control bg-info text-light font-weight-bold"
                            value="Submit">
                    </div>
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