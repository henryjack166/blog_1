<?php
    session_start();
    require_once'../../vendor/autoload.php';
    use App\classes\category;
$result='';
    $result=$test=category::view_category();
    
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
            <div class="col-sm-10 mt-5 offset-sm-1">
                <table class="table table-striped table-dark">
                    <h2 class="text-center mb-5">View Category</h2>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>publication_status</th>
                        <th>category_description</th>
                        <th>images</th>
                        <th>Action</th>
                    </tr>
                    <?php while($view_result=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $view_result['id'] ?></td>
                        <td><?php echo $view_result['category_name'] ?></td>
                        <td><?php echo $view_result['publication_status'] ?></td>
                        <td><?php echo $view_result['category_description'] ?></td>
                        <td><img src="<?php echo $view_result['images'] ?>" alt="picture"
                                style="width: 70px; height: 80px;"></td>
                        <td>
                            <a href="edit.php?id=<?php echo $view_result['id']; ?>">edit</a> ||
                            <a href="#">Delete</a> ||
                            <a href="#">View</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
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