<?php 
session_start();
require_once'../../vendor/autoload.php';
use App\classes\category_function;
$id=$_GET['id'];
if(isset($_GET['id'])){
    $viewResult=$test=category_function::edit_category($id);
}
if(isset($_POST['btn'])){
    $test=category_function::update_category($_POST,$id);
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
            <div class="col-sm-8 offset-sm-2 mt-5">
                <h2 class="text-center mb-5"><?php  ?></h2>
                <h2 class="text-center mb-5">Edit category</h2>
                <form action="" method="post" enctype="multipart/form-data" name="editBlogFrom">
                    <div class="from-group">
                        <label for="category_name" class="font-weight-bold">Category Name: </label>
                        <input type="text" name="category_name" class="form-control" placeholder="category_name"
                            id="category_name" value="<?php echo $viewResult['category_name']; ?>">
                        <input type="hidden" name="blog_id" class="form-control" placeholder="blog_id" id="blog_id"
                            value="<?php  ?>">
                    </div>
                    <!--  <div class="from-group">
                        <label for="category_id" class="font-weight-bold">Category Name: </label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value=""><?php ?></option>

                            <option value="">

                          
                        </select>
                    </div> -->

                    <div class="from-group">
                        <label for="" class="font-weight-bold">Blog Description: </label>
                        <textarea name="category_description" id="category_description" cols="30" rows="10"
                            class="form-control"
                            placeholder="category_description"><?php echo $viewResult['category_description']; ?></textarea>
                    </div>
                    <!--  <div class="from-group">
                        <label for="">File Upload</label>
                        <input type="file" name="picture" accept="image/*">
                        <img src="<?php //echo $viewResult['picture']; ?>" alt="image"
                            style="width: 250px; height: 200px;">
                    </div> -->
                    <div class="from-group">
                        <label for="publication_status" class="font-weight-bold">publication status:</label>
                        <select name="publication_status" id="publication_status" class="form-control">
                            <option value=""><?php echo $viewResult['publication_status']; ?></option>
                            <option value="1">Public</option>
                            <option value="0">Unpublic</option>
                        </select>
                    </div>
                    <div class="from-group">
                        <input type="submit" name="btn" class="form-control bg-info text-light font-weight-bold"
                            value="Update">
                    </div>
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
    <script>
    document.forms['editBlogFrom'].elements['publication_status'].value =
        '<?php echo $viewResult['publication_status'] ?>';
    </script>
</body>

</html>