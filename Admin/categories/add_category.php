<?php

include 'C:\xampp\htdocs\Usindh\dbconn.php';

include '../app.php';



if(isset($_POST['add_cat']))

{

    $cat_name=$_POST['cat_name'];
 
    $cat_image=$_FILES['cat_image']['name'];
    $tempname=$_FILES['cat_image']['tmp_name'];
    $folder="cat_images/";
    
    $target=$folder.basename($_FILES['cat_image']['name']);
    move_uploaded_file($tempname ,$target);

    $ins="INSERT INTO `category`(`cat_name`, `cat_image`) VALUES ('$cat_name' , '$cat_image')";
    
    $run=mysqli_query($conn , $ins);

    if($run)
    {
        ?>
            <script>window.open('add_category.php' ,'_parent') </script>
        
        <?php
        
    }
    else
    {
        echo "eeror";

    }

}


?>


<!doctype html>
<html lang="en">

<head>
  <title>add_category</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<h3 class="text-center py-2 bg-dark text-white w-50 mx-auto">add Catergory data </h3>
<div class="container w-50">

  

<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">Category Name</label>
    <input type="text"
    class="form-control" name="cat_name" id="" aria-describedby="helpId" placeholder="enter catergory name of product" Required>
    
  </div>

  
<div class="mb-3">

    <label for="" class="form-label">Category image</label>
    <input type="file"
    class="form-control" name="cat_image" id="" aria-describedby="helpId" placeholder="enter catergory name of product" Required>
    
  </div>

<div class="mb-3">

    <label for="" class="form-label">Product Quantity</label>
    <input type="number"
    class="form-control w-50" name="" id="" aria-describedby="helpId" placeholder="" Required>
    
  </div>
<div class="mb-3">
  <input type="submit" value="Add product" name="add_cat" class="btn btn-warning">
  </div>
  


</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>