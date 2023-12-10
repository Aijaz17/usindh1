<?php
session_start();
// session_destroy();

// include "header.php";


if(isset($_POST['add_to_cart']))
{

    $count=0;
    if(isset($_SESSION['cart']))
    {

        $mycart=array_column($_SESSION['cart'],'product_title');

        if(in_array($_POST['product_title'] ,$mycart))
        {
            
            echo "<script>
            alert('product is alraedy added in cart');
            window.location.href='index.php';
            </script>";

        }

        else

        {

        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array( 'product_title'=>$_POST['product_title'], 'product_price'=>$_POST['product_price'] ,'quantity'=>$_POST['quantity'], 'product_image'=>$_POST['product_image']);
      
        
        print_r($_SESSION['cart'][$count]);

        
        echo "<script>
        alert('product is added in cart');
        window.location.href='index.php';
        </script>";
    

        }
    }


    else
    {

        $_SESSION['cart'][0]=array( 'product_title'=>$_POST['product_title'], 'product_price'=>$_POST['product_price'] ,'quantity'=>$_POST['quantity'],'product_image'=>$_POST['product_image']);

        print_r($_SESSION['cart'][0]);

        
        echo "<script>
        alert('product is added in cart');
        window.location.href='index.php';
        </script>";

    



    }
}

?>