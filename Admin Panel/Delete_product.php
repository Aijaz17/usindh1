<?php

include 'connection.php';

$id=$_GET['id'];

// echo $id;

$del="DELETE FROM `products` WHERE pid='$id'";
mysqli_query($conn , $del);
header('location:show_all_products.php');

?>
