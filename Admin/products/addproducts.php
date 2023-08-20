
<?php

include 'C:\xampp\htdocs\Usindh\dbconn.php';
include '../app.php';

include 'C:\xampp\htdocs\Usindh\dbconn.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
  <body>


  <section id="main-content">

      <div class="container my-4 ">
          
          <h3 class="text-center py-2 bg-dark text-white w-50 mx-auto">Add Product</h3>
    <form action="" method="post" enctype="multipart/form-data" class="w-50 mx-auto">

    
   <div class="mb-3">

        <label for="" class="form-label">category_id </label>

        <input type="text" name="cat_id" id="" class="form-control">

    </div> 

    <div class="mb-3">

        <label for="" class="form-label">Product Name:</label>

        <input type="text" name="pname" id="" class="form-control">

    </div>

    <div class="mb-3">

    <label for="" class="form-label">Product Description:</label>
     <input type="text" name="pdesc" id="" class="form-control">

    </div>
    <div class="mb-3">

    <label for="" class="form-label">Product slug:</label>
     <input type="text" name="pslug" id="" class="form-control">

    </div>

   <div class="mb-3">
   <label for="" class="form-label">Product Price</label>
     <input type="text" name="pprice" id="" class="form-control">
   
    </div>

   <div class="mb-3">
   <label for="" class="form-label">Product Image</label>
     <input type="file" name="pimage" id="" class="form-control">
   </div>
   <div class="mb-3">
   <label for="" class="form-label">Product date</label>
     <input type="date" name="date" id="" class="form-control">
   </div>

   <div class="mb-2">
    
   <input type="submit" class="btn btn-warning my-5" value="Upload" name="submit" >

   </div>

  </form>

  
  </div>
   
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  </body>

</html>

<?php

if(isset($_POST['submit']))

{

    $cat_id=$_POST['cat_id'];
    $name=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pdesc=$_POST['pdesc'];
    $pslug=$_POST['pslug'];
    $date=$_POST['date'];



    $pimage=$_FILES['pimage']['name'];
    $tempname=$_FILES['pimage']['tmp_name'];
    $folder="images/";

    $target=$folder.basename($_FILES['pimage']['name']);
    move_uploaded_file($tempname ,$target);




    $ins="INSERT INTO `products`(`category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`) VALUES ('$cat_id' , '$name' , '$pdesc' ,  '$pslug' ,'$pprice' , '$target' ,'$date')";

    $run=mysqli_query($conn ,$ins);


    if($run)
    {
        ?>
            <script>window.open('https://www.google.com' ,'_parent') </script>
        
        <?php
        
    }
    else
    {
        echo "eeror";

    }

}


?>