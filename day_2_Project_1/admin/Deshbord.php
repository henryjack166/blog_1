<?php
require_once '../vendor/autoload.php';
session_start();
use app\Admin_logout;
if (!isset($_SESSION['id'])){
    header('location: admin_login.php');
}

if (isset($_GET['status'])){
    if ($_GET['status']=='Logout'){
        $logout=Admin_logout::logout_admin();
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


    <title>Hello, world!</title>
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