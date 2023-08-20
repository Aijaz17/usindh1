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

    <div class="container mx-5 px-5">
        <div class="row mt-5 mx-5 px-5">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>
                            Product ID
                        </th>
                        <th>
                            Product Title
                        </th>
                        <th>
                            Product Description
                        </th>
                        <th>
                            Category ID
                        </th>
                        <th>
                            Brand ID
                        </th>
                        <th>
                            product image
                        </th>
                        <th>
                            product Price
                        </th>
                        <th>
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sel_all_products = "SELECT * FROM `products`";
                    $query = mysqli_query($connect, $sel_all_products);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['product_id'] ?>
                            </td>
                            <td>
                                <?php echo $row['product_title'] ?>
                            </td>
                            <td>
                                <?php echo $row['product_description'] ?>
                            </td>
                            <td>
                                <?php echo $row['category_id'] ?>
                            </td>
                            <td>
                                <?php echo $row['brand_id'] ?>
                            </td>
                            <td>
                                <img src="product_images/<?php echo $row['product_image1'] ?>" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>
                                <?php echo $row['product_price'] ?>
                            </td>
                            <td>
                                <?php echo $row['date'] ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
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