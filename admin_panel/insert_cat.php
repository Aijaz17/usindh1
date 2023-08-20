<?php
include('../includes/connection.php');

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title' ";

    $result_select = mysqli_query($connect, $select_query);

    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo ('   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    This Category already present in the database
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            '
        );
    } else {
        $insert_query = "INSERT INTO `categories`(`category_title`) VALUES ('$category_title')";

        $result = mysqli_query($connect, $insert_query);
        if ($result) {
            echo ('   <div class="alert alert-success alert-dismissible fade show" role="alert">
            Category has been added successsfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            '
            );
        }
    }
}

?>

<div class="container w-50 my-5">
    <h2 class="pb-3 text-center">Insert Category</h2>
    <form action="" method="post">
        <div class="input-group mb-3 w-90">
            <span class="input-group-text" id="basic-addon1">
                <span class="iconify" data-icon="fluent:receipt-28-regular" style="font-size: 20px;"></span>
            </span>
            <input type="text" class="form-control" placeholder="Insert Category" aria-label="categories" aria-describedby="basic-addon1" name="cat_title" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary py-2 px-3" name="insert_cat" type="submit">Insert Category</button>
        </div>

    </form>
</div>