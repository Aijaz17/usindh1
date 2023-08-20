<?php

include("../includes/connection.php");

if (isset($_POST['insert_products'])) {

    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keyword = $_POST['product_keyword'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand']; 
    $product_price = $_POST['product_price'];
    $product_status = "true";

    // ACCESSING IMAGES
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // TEMPERORY IMG NAME
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // MOVE UPLOADED FILES
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");

    $insert_products = "INSERT INTO `products` (`product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES ('$product_title', '$product_desc','$product_keyword', '$product_category', '$product_brand', '$product_image1', '$product_image2','$product_image3', '$product_price', NOW(), '$product_status')";

    $result_query = mysqli_query($connect, $insert_products);

    if ($result_query) {
        echo ('<div class="container mx-5 alert alert-success alert-dismissible fade show" role="alert">
        Product has been added successsfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        '
    );
    header('location:view_products.php');
    }
}

?>

<div class="container my-3">
    <h1 class="text-center">Insert Products</h1>

    <!-- PRODUCT FORM -->
    <form action="" method="post" class="py-3 w-75 m-auto mb-lg-0" enctype="multipart/form-data">
        <!-- PRODUCT TITLE -->
        <div class="form-outline my-3">
            <input type="text" name="product_title" id="product-title" placeholder="Product title" class="form-control py-3 px-3" required>
        </div>
        <!-- PRODUCT DESCRIPTIOn -->
        <div class="form-outline my-4">
            <input type="text" name="product_desc" id="product-desc" placeholder="Product description" class="form-control py-3 px-3" required>
        </div>
        <!-- PRODUCT KEYWORD -->
        <div class="form-outline my-4">
            <input type="text" name="product_keyword" id="product-keyword" placeholder="Product keywords" class="form-control py-3 px-3" required>
        </div>
        <!-- PRODUCT CATEGORY -->
        <div class="form-outline my-4">
            <select class="form-select form-select-md py-3 px-3" name="product_category" id="product_category">
                <option selected disabled>Select Category</option>
                <?php
                $sel_cat = "SELECT * FROM `categories` ";
                $result_query = mysqli_query($connect, $sel_cat);

                while ($row_data = mysqli_fetch_assoc($result_query)) {
                    $cat_title = $row_data['category_title'];
                    $cat_id = $row_data['category_id'];
                    echo "<option value='$cat_id'>$cat_title</option>";
                }
                ?>
            </select>
        </div>
        <!-- PRODUCT BRAND -->
        <div class="form-outline my-4">
            <select class="form-select form-select-md py-3 px-3" name="product_brand" id="product_brand">
                <option selected disabled>Select Brand</option>
                <?php
                $sel_brand = "SELECT * FROM `brands` ";
                $result_query = mysqli_query($connect, $sel_brand);

                while ($row_data = mysqli_fetch_assoc($result_query)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?>
            </select>
        </div>
        <!-- PRODUCT IMAGE - 1 -->
        <div class="form-outline my-4">
            <label for="" class="form-label">Product Image</label>
            <input type="file" class="form-control" name="product_image1" id="product_image" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Supported Format: png, jpg, jpeg</div>
        </div>
        <!-- PRODUCT IMAGE - 2 -->
        <div class="form-outline my-4">
            <label for="" class="form-label">Product Image 2</label>
            <input type="file" class="form-control" name="product_image2" id="product_image" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Supported Format: png, jpg, jpeg</div>
        </div>
        <!-- PRODUCT IMAGE - 3 -->
        <div class="form-outline my-4">
            <label for="" class="form-label">Product Image 3</label>
            <input type="file" class="form-control" name="product_image3" id="product_image" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Supported Format: png, jpg, jpeg</div>
        </div>
        <!-- PRODUCT PRICE -->
        <div class="form-outline my-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">$</span>
                <input type="text" name="product_price" id="product_price" placeholder="Product Price" class="form-control py-3 px-3" required style="-moz-appearance: textfield;">
            </div>
        </div>
        <!-- SUMBIT BUTTON -->
        <button type="submit" class="btn btn-primary w-100 py-2" name="insert_products">Insert Products</button>
    </form>
</div>