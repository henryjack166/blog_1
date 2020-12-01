<?php 
session_start();
require_once'../../vendor/autoload.php';
use App\classes\Blog_category_function;
$result= $test=Blog_category_function:: add_category_name_in_blog();
$message='';
if(isset($_POST['btn'])){
    $message=$test=Blog_category_function::save_blog_category($_POST);
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
                <h2 class="text-center mb-5"><?php echo $message; ?></h2>
                <h2 class="text-center mb-5">Add Blog</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="blog_title" class="font-weight-bold">Blog Title: </label>
                        <input type="text" name="blog_title" class="form-control" placeholder="Blog Title"
                            id="blog_title">
                    </div>
                    <div class="from-group">
                        <label for="category_id" class="font-weight-bold">Category Name: </label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select publication status</option>
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
                        <textarea name="blog_description" id="blog_description" cols="30" rows="10" class="form-control"
                            placeholder="blog_description"></textarea>
                    </div>
                    <div class="from-group">
                        <label for="">File Upload</label>
                        <input type="file" name="blog_img" accept="image/*">
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