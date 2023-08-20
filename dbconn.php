<?php

$server="localhost";
$username="root";
$password="";
$db="ecomm";


$conn=mysqli_connect($server,$username ,$password ,$db);

if($conn)
{
    echo "connection established";
}
else
{
    echo "connection is not established";
}



?>
