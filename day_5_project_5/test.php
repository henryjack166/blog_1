<?php
require_once'vendor/autoload.php';
use App\classes\Blog_category_function;
$result=$test=Blog_category_function::display_blog_category();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">A Warm Welcome!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
                possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
                repellat.</p>
            <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
        </header>

        <!-- Page Features -->
        <div class="row text-center">
            <?php while($viewResult=mysqli_fetch_assoc($result)){ ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo $viewResult['picture']; ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $viewResult['blog_title']; ?></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
                            sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div> -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>