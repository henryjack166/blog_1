<?php
session_start();
require_once '../vendor/autoload.php';
use App\clas\admin_function;
if (!isset($_SESSION['id'])){
    header('location: admin_login.php');
}
if(isset($_GET['status'])){
    if($_GET['status']=='Logout'){
        $test= admin_function::admin_logout();
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/front/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <?php
    include_once 'include/header.php';
    ?>


    </div>

    <script src="../assets/front/js/jquery.min.js"></script>
    <script src="../assets/front/js/bootstrap.bundle.min.js"></script>
</body>

</html>