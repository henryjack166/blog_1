<?php
session_start();
require_once "../../vendor/autoload.php";
use app\edit_category_function;
use app\Update_add_category;

$ID=$_GET['id'];
if (isset($_GET['id'])){
    $message=$test= edit_category_function::edit_category($ID);
    $viewMessage=mysqli_fetch_assoc($message);
}
if (isset($_POST['btn'])){
    $test=Update_add_category::update_category($_POST,$ID);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../assets/front/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php
include_once '../include/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 bg-light mt-5">
            <h4 class="text-center">Edit Category</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Add Catagory</label>
                    <input type="text" name="add_catagory" class="form-control" id="exampleFormControlInput1" placeholder="add catagory" value="<?php echo $viewMessage['add_catagory']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category Name</label>
                    <select class="form-control" name="publication_status" id="exampleFormControlSelect1" value="<?php echo $viewMessage['publication_status']; ?>>
                        <option value="1">Public</option>
                        <option value="0">Unpublic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Blog description</label>
                    <textarea class="form-control" type="text"  name="blog_description" id="exampleFormControlTextarea1" rows="3" value="<?php echo $viewMessage['blog_description']; ?>"></textarea>
                </div>
                <div class="form-control">
                    <input type="submit" name="btn" value="Update" class="btn-block">
                </div>
            </form>
        </div>
    </div>


<script src="../../assets/front/js/jquery.min.js"></script>
<script src="../../assets/front/js/bootstrap.bundle.min.js"></script>
</body>
</html>