<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav m-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="../../Home_page.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Add_category/Add_category.php">Add category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../Add_category/Manage_category.php">Manage category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../Add_category/add_blog.php">Add blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Manage blog</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    echo $_SESSION['name'];
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?status=Logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>