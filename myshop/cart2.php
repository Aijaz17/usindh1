<?php


include "connection.php";
// include "header.php";

session_start();

// session_destroy();

if(isset($_SESSION['cart']))
{

    // print_r($_SESSION['cart']);

   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    

<h3 class="text-center p-2 border rounded bg-primary "> My Cart</h3>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9 ">
            
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">quantity</th>
    </tr>
  </thead>
  <tbody>

      <?php



      $total=0;

       foreach($_SESSION['cart'] as $key=>$value)
       {

          // $total=$total+$value['pprice'];


      ?>
               <tr>
      <th scope="row"> <?php echo $key+1 ?> </th>
      <td><?php   print_r($value['product_title']); ?></td>
      <td><?php   print_r($value['product_price']); ?></td>
      <td><input type="number" name="" class="text-center" id="" value="<?php   print_r($value['quantity']); ?>"></td>
      <td class="btn btn-sm btn-outline-danger">Remove</td>
    </tr>

      <?php

    }
    
  }
        ?>
   
 
  </tbody>
</table>
    
        </div>
        
       <div class="col-md-3 p-4 bg-secondary">
        <h4 class>Total:</h2>
        <h5 class="text-right mb-4" style="text-align:right"><?php echo $total ?></h5>


        <div class="d-grid">
        <button class="btn btn-primary">Purchase</button>
        </div>
        </div>


    </div>


</div>
</body>
</html>