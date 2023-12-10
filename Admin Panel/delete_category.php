<?php

include 'connection.php';

$catid=$_GET['id'];

// echo $id;

$del="DELETE FROM `category` WHERE cat_id='$catid'";
mysqli_query($conn , $del);

header('location:show_category.php');

?>
