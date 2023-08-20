<!------------- TOP SECTION ---------------->
<div class="container py-0">
    <nav class="navbar navbar-expand-lg custom-nav py-0">
        <ul class="navbar-nav me-auto flex-auto">
            <?php
            if (!isset($_SESSION['username'])) {
            ?>
                <li class="nav-item">
                    <a class="nav-link disabled disable-link" href="#">Welcome Guest</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item profile-link">
                    <img src="admin_panel/user_images/<?php echo  $_SESSION['profile_pic']; ?>" class="profile-pic" alt="">
                    <a class="nav-link disable-link" href="profile.php"><?php echo $_SESSION['username'] ?></a>
                </li>
            <?php
            }
            ?>

            <?php
            if (!isset($_SESSION['username'])) {
            ?>
                <li class="nav-item px-3">
                    <a class="nav-link" href="includes/user_login.php">Login</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item px-3">
                    <a class="nav-link" href="includes/user_logout.php">Logout</a>
                </li>
            <?php
            }
            ?>
        </ul>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <li class="nav-item">
                        <a href="admin_panel/index.php" class="nav-link">Weclome <?php echo $_SESSION['admin']; ?></a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a href="admin_panel/admin_login.php" class="nav-link">Admin?</a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </nav>
    </nav>

</div>


<!------------- NAVBAR START ---------------->
<header class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-nav bg-color">
        <div class="container px-4">
            <a class="navbar-brand" href="/index.php">
                <img src="https://img.freepik.com/premium-vector/abstract-modern-ecommerce-logo-design-colorful-gradient-shopping-bag-logo-template_467913-995.jpg" alt="LOGO" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="iconify" id="hamicon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0 py-2 custom-list">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">
                            <span class="iconify" data-icon="ion:cart-sharp" style="font-size: 24px;"></span>
                            <sup class="items"><?php cart_items(); ?></sup>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled disable-link" href="#">Total Price: $<?php total_price();
                                                                                            ?></a>
                    </li>

                </ul>
                <form class="d-flex" role="search" action="search.php" method="get">
                    <input class="form-control me-2 search-form" type="search" name="search_data" placeholder="Search" aria-label="Search" required>
                    <input class="btn btn-outline-primary" value="Search" name="search_data_products" type="submit">
                </form>
                <div class="register">
                    <nav class="navbar">
                        <ul class="navbar-nav me-auto mb-lg-0 custom-list">
                            <?php
                            if (!isset($_SESSION['username'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="includes/user_register.php">
                                        <button class="btn btn-primary pl-4 custom-btn">Register</button>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script> -->
<!------------- NAVBAR END ---------------->