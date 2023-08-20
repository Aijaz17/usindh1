<?php
include('../includes/connection.php');

if (isset($_POST['insert_brands'])) {
    $brand_title = $_POST['brand_title'];

    $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title' ";

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
        $insert_query = "INSERT INTO `brands`(`brand_title`) VALUES ('$brand_title')";

        $result = mysqli_query($connect, $insert_query);
        if ($result) {
            echo ('   <div class="alert alert-success alert-dismissible fade show" role="alert">
            Brand has been added successsfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            '
            );
        }
    }
}

?>


<div class="container w-50 my-5">
    <h2 class="pb-3 text-center">Insert Brands</h2>
    <form action="" method="post">
        <div class="input-group mb-3 w-90">
            <span class="input-group-text" id="basic-addon1">
                <span class="iconify" data-icon="tabler:brand-amazon" style="font-size: 20px;"></span>
            </span>
            <input type="text" class="form-control" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1" name="brand_title" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary py-2 px-4" name="insert_brands" type="submit">Insert Brands</button>
        </div>

    </form>
</div>