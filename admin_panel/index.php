<?php
include('../includes/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arts-Shop Online Like Never Before</title>

    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CUSTOM STYLE LINK -->
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="admin_page_style.css">
</head>

<body>

    <!------------------- NAVBAR SECTION ------------------->
    <header class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary custom-nav bg-color">
            <div class="container" style="max-width: 1350px !important;">
                <div class="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <a class="navbar-brand" href="../index.php">
                    <img src="https://img.freepik.com/premium-vector/abstract-modern-ecommerce-logo-design-colorful-gradient-shopping-bag-logo-template_467913-995.jpg" alt="LOGO" width="80">
                </a>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <?php
                        if (isset($_SESSION['admin'])) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Welcome <?php echo $_SESSION['admin'];  ?></a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Welcome guest</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-dark bg-color sidebar-nav" style="width: 250px;">
            <div>
                <h1 class="fw-regular text-body-emphasis text-secondary" style="font-size: 28px;">Manage Details</h1>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto navbar-nav py-2 custom-list">
                <li class="nav-item-hover">
                    <a href="index.php?insert_products" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5zm-1 5v5h-5v2h5v5h2v-5h5v-2h-5v-5h-2z" />
                        </svg>
                        Insert Products
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?view_products" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                            <circle cx="22" cy="24" r="2" fill="currentColor" />
                            <path fill="currentColor" d="M29.777 23.479A8.64 8.64 0 0 0 22 18a8.64 8.64 0 0 0-7.777 5.479L14 24l.223.521A8.64 8.64 0 0 0 22 30a8.64 8.64 0 0 0 7.777-5.479L30 24ZM22 28a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4Z" />
                            <circle cx="8" cy="8" r="1" fill="currentColor" />
                            <circle cx="8" cy="16" r="1" fill="currentColor" />
                            <circle cx="8" cy="24" r="1" fill="currentColor" />
                            <path fill="currentColor" d="M5 21h7v-2H5v-6h16v3h2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h7v-2H5ZM5 5h16v6H5Z" />
                        </svg>
                        View Products
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?insert_cat" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M27 22.141V18a2 2 0 0 0-2-2h-8v-4h2a2.002 2.002 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2h-6a2.002 2.002 0 0 0-2 2v6a2.002 2.002 0 0 0 2 2h2v4H7a2 2 0 0 0-2 2v4.142a4 4 0 1 0 2 0V18h8v4.142a4 4 0 1 0 2 0V18h8v4.141a4 4 0 1 0 2 0ZM13 4h6l.001 6H13ZM8 26a2 2 0 1 1-2-2a2.002 2.002 0 0 1 2 2Zm10 0a2 2 0 1 1-2-2a2.003 2.003 0 0 1 2 2Zm8 2a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Z" />
                        </svg>
                        Insert Categories
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?view_cat" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                                <path d="M12 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm9 4v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            </g>
                        </svg>
                        View Categories
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?insert_brands" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M9 12h2v-2h2V8h-2V6H9v2H7v2h2v2zm1 4c3.9 0 7-3.1 7-7s-3.1-7-7-7s-7 3.1-7 7s3.1 7 7 7zm0-12c2.8 0 5 2.2 5 5s-2.2 5-5 5s-5-2.2-5-5s2.2-5 5-5zM3 19h14v-2H3v2z" />
                        </svg>
                        Insert Brands
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?view_brand" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3 11V3h8v8H3Zm0 10v-8h8v8H3Zm10-10V3h8v8h-8Zm0 10v-8h8v8h-8ZM5 9h4V5H5v4Zm10 0h4V5h-4v4Zm0 10h4v-4h-4v4ZM5 19h4v-4H5v4ZM15 9Zm0 6Zm-6 0Zm0-6Z" />
                        </svg>
                        View Brands
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="#" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
                            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                <rect width="30" height="36" x="9" y="8" rx="2" />
                                <path stroke-linecap="round" d="M18 4v6m12-6v6m-14 9h16m-16 8h12m-12 8h8" />
                            </g>
                        </svg>
                        All Orders
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="#" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 4C4.8 4 3 5.8 3 8s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4m0 6c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2m0 4c-3.9 0-7 1.8-7 4v2h11v-2H2c0-.6 1.8-2 5-2c1.8 0 3.2.5 4 1v-2.2c-1.1-.5-2.5-.8-4-.8M22 4h-7c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m-6 14h-1V6h1v12m6 0h-4V6h4v12Z" />
                        </svg>
                        All Payments
                    </a>
                </li>
                <li class="nav-item-hover mt-2">
                    <a href="index.php?list_user" class="nav-link text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 36 36">
                            <path fill="currentColor" d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9zm-.1-7.7c.1 0 .1 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8c-1.6 0-2.8-1.3-2.8-2.8c0-1.6 1.3-2.9 2.8-2.9z" class="clr-i-outline clr-i-outline-path-1" />
                            <path fill="currentColor" d="M32.7 16.7c-1.9-1.7-4.4-2.6-7-2.5h-.8c-.2.8-.5 1.5-.9 2.1c.6-.1 1.1-.1 1.7-.1c1.9-.1 3.8.5 5.3 1.6V25h2v-8l-.3-.3z" class="clr-i-outline clr-i-outline-path-2" />
                            <path fill="currentColor" d="M23.4 7.8c.5-1.2 1.9-1.8 3.2-1.3c1.2.5 1.8 1.9 1.3 3.2c-.4.9-1.3 1.5-2.2 1.5c-.2 0-.5 0-.7-.1c.1.5.1 1 .1 1.4v.6c.2 0 .4.1.6.1c2.5 0 4.5-2 4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6 0-3 .8-3.8 2.2c.5.3 1 .7 1.4 1.3z" class="clr-i-outline clr-i-outline-path-3" />
                            <path fill="currentColor" d="M12 16.4c-.4-.6-.7-1.3-.9-2.1h-.8c-2.6-.1-5.1.8-7 2.4L3 17v8h2v-7.2c1.6-1.1 3.4-1.7 5.3-1.6c.6 0 1.2.1 1.7.2z" class="clr-i-outline clr-i-outline-path-4" />
                            <path fill="currentColor" d="M10.3 13.1c.2 0 .4 0 .6-.1v-.6c0-.5 0-1 .1-1.4c-.2.1-.5.1-.7.1c-1.3 0-2.4-1.1-2.4-2.4c0-1.3 1.1-2.4 2.4-2.4c1 0 1.9.6 2.3 1.5c.4-.5 1-1 1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5c-2.1 1.3-2.8 4-1.5 6.1c.8 1.3 2.2 2.1 3.8 2.1z" class="clr-i-outline clr-i-outline-path-5" />
                            <path fill="currentColor" d="m26.1 22.7l-.2-.3c-2-2.2-4.8-3.5-7.8-3.4c-3-.1-5.9 1.2-7.9 3.4l-.2.3v7.6c0 .9.7 1.7 1.7 1.7h12.8c.9 0 1.7-.8 1.7-1.7v-7.6zm-2 7.3H12v-6.6c1.6-1.6 3.8-2.4 6.1-2.4c2.2-.1 4.4.8 6 2.4V30z" class="clr-i-outline clr-i-outline-path-6" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg>
                        List Users
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../images/gift-item-2.jpg" alt="" class="rounded-circle me-2" width="32" height="32">
                    <?php
                    if (isset($_SESSION['admin'])) {
                    ?>
                        <strong><?php echo $_SESSION['admin'] ?></strong>
                    <?php
                    } else {
                    ?>
                        <strong>Guest</strong>
                    <?php
                    }
                    ?>

                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="index.php?admin_profile">Update Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="admin_logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>


        <div class="container my-5">
            <?php
            if (isset($_GET['insert_cat'])) {
                include("insert_cat.php");
            }
            if (isset($_GET['insert_brands'])) {
                include("insert_brands.php");
            }
            if (isset($_GET['insert_products'])) {
                include("insert_products.php");
            }
            if (isset($_GET['admin_profile'])) {
                include("admin_profile.php");
            }
            if (isset($_GET['view_products'])) {
                include("view_products.php");
            }
            if (isset($_GET['view_cat'])) {
                include("view_cat.php");
            }
            if (isset($_GET['view_brand'])) {
                include("view_brand.php");
            }
            if (isset($_GET['list_user'])) {
                include("list_user.php");
            }
            ?>
        </div>
    </div>




    <!-- POPPER JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- ICONIFY JS LINK -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <!-- CUSTOM JavaScript Link -->
    <script src="../app.js"></script>


    <script>
        const Sidebar = document.querySelector('.sidebar-nav');
        const HamIcon2 = document.querySelector('.hamburger');


        HamIcon2.onclick = function() {
            Sidebar.classList.toggle('active');
            this.classList.toggle('active');
        }
    </script>
</body>

</html>