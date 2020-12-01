<?php
    session_start();
    require_once'../../vendor/autoload.php';
    use App\classes\category;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
       $view_result=$result=$test=category::edit_category($id);
  
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php include_once'../include/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-5">
                <h1 class="text-center text-success"><?php  ?></h1>
                <h2 class="text-center mb-5">Edit Category</h2>
                <form action="" method="post" enctype="multipart/form-data" accept="image/*">
                    <div class="from-group">
                        <label for="category_name" class="font-weight-bold">Category Name: </label>
                        <input type="text" name="category_name" class="form-control" placeholder="Category Name"
                            id="category_name" value="<?php echo $view_result['category_name']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="publication_status" class="font-weight-bold">publication status:</label>
                        <select name="publication_status" id="publication_status" class="form-control">
                            <option value="<?php echo $view_result['publication_status']; ?>"></option>
                            <option value="1">Public</option>
                            <option value="0">Unpublic</option>
                        </select>
                    </div>
                    <div class="from-group">
                        <label for="" class="font-weight-bold">Category Description: </label>
                        <textarea name="category_description" id="category_description" cols="30" rows="10"
                            class="form-control" placeholder="Category Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File input</label>
                        <input type="file" name="images" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="from-group">
                        <input type="submit" name="btn" class="form-control bg-info text-light font-weight-bold"
                            value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

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