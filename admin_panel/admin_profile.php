<?php
include('../includes/connection.php');
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

    <div class="container mx-5 px-5" style="margin-left: 100px !important;">
        <?php
        if (isset($_POST['Update'])) {
            $update_name =  $_POST['update_name'];
            $update_password = $_POST['update_password'];
            $current_password = $_POST['current_password'];

            $check_con = "SELECT * FROM `admin_table` WHERE `admin_password`= '$current_password'";

            $results = mysqli_query($connect, $check_con);

            if (mysqli_num_rows($results) > 0) {
                $updated_table = "UPDATE `admin_table` SET `admin_username`='$update_name',`admin_password`='$update_password'";

                $run_update = mysqli_query($connect, $updated_table);

                if ($run_update) {
                    echo "<script>alert('Data Updated Successfully')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                } else {
                    echo "<script>alert('Unknown Error Occured. Please check back later')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                }
            } else {
                echo "<script>alert('Password is not matched')</script>";
            }
        }
    
        ?>
    </div>
    <div class="register-photo" style="margin-left: 80px;">
        <div class="form-container">
            <div class="image-holder login-image"></div>

            <form method="post" enctype="multipart/form-data">
                <h2 class="text-center"><strong>Update</strong> Your Admin account.</h2>

                <div class="form-group">
                    <input class="form-control input-field" type="text" name="update_name" placeholder="Username" autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control input-field" type="password" name="current_password" placeholder="Current Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control input-field" type="password" name="update_password" placeholder="New Password" autocomplete="off" >
                </div>

                <div class="form-group d-flex">
                    <input type="submit" class="btn btn-primary d-block px-5 me-2" name="Update" value="Update">
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