<?php

$conn=mysqli_connect("localhost","root","","usindh");
if($conn)
{
    echo "db is connected";
}
else
{
    echo "db is not connected";
}

?>