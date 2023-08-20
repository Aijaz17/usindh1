<?php
include('../includes/connection.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Arts-Shop Online Like Never Before</title>

    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CUSTOM STYLE LINK -->
    <link rel="stylesheet" href="../stylesheet/style.css">
</head>

<body>

    <!------------- NAVBAR START ---------------->
    <header class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary custom-nav bg-color">
            <div class="container px-4">
                <a class="navbar-brand" href="../index.php">
                    <img src="../images/logo.png" alt="LOGO" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="iconify" id="hamicon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0 py-2 custom-list">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../all_products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <div class="container">
        <?php

        if (isset($_POST['admin_login'])) {
            $admin_name = $_POST['admin_name'];
            $admin_password = $_POST['admin_password'];

            $sel_user_query = "SELECT * FROM `admin_table` WHERE `admin_username`='$admin_name' AND `admin_password`='$admin_password'";

            $result_user = mysqli_query($connect, $sel_user_query);

            $row_data = mysqli_fetch_array($result_user);
            $_SESSION['admin'] = $row_data['admin_username'];

            if (mysqli_num_rows($result_user) > 0) {
                echo "<script>alert('Login Successfully')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
            } else {
                echo ('<div class="container mx-1 mt-3 alert alert-danger alert-dismissible fade show" role="alert">
    Email or Password do not match!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    '
                );
            }
        }
        ?>
    </div>
    <!------------- NAVBAR END ---------------->
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder login-image"></div>

            <form method="post" enctype="multipart/form-data">
                <h2 class="text-center"><strong>Login</strong> to Admin account.</h2>

                <div class="form-group">
                    <input class="form-control input-field" type="text" name="admin_name" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <input class="form-control input-field" type="password" name="admin_password" placeholder="Password" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary d-block w-100" name="admin_login" value="Login">
                </div>
            </form>
        </div>
    </div>










    <!-- POPPER JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- ICONIFY JS LINK -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <!-- CUSTOM JavaScript Link -->
    <script src="app.js"></script>
</body>

</html>