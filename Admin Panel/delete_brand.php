<?php

include 'connection.php';

$brandid=$_GET['id'];

// echo $id;

$del="DELETE FROM `brand` WHERE id='$brandid'";
mysqli_query($conn , $del);

header('location:show_brands.php');

?>
