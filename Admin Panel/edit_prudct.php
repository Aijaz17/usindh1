<?php
    include 'connection.php';
        
    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $ptitle=$_POST['ptitle'];
        $pdescription=$_POST['pdescription'];
        $pkeyword=$_POST['pkeyword'];
        $pcategory=$_POST['pcategory'];
        $pbrand=$_POST['pbrand'];
        $pprice=$_POST['pprice'];
        $img_tmp_name=$_FILES['pimage']['tmp_name'];



        if(empty($img_tmp_name))
        {
            $update="UPDATE products set product_title='$ptitle', product_description='$pdescription',product_keyword='$pkeyword',product_category='$pcategory',product_brand='$pbrand',product_price='$pprice' where pid='$id'";   
            mysqli_query($con,$update);
            header("location:show_all_products");
        }
       
        else{

     
        $folder="images/";
        $target=$folder.basename($_FILES['pimage']['name']);
        move_uploaded_file($img_tmp_name,$target);
        $update="UPDATE products set product_title='$ptitle', product_description='$pdescription',product_keyword='$pkeyword',product_category='$pcategory',product_brand='$pbrand',product_price='$pprice',product_image='$target' where pid='$id'";
        mysqli_query($conn,$update);
        header("location:show_all_products.php");   
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit product</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php

include "sidebar.php";
       ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php  
                
                include 'topnav.php'
                ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php

                    

                    $id=$_GET['id'];
                    $select = "SELECT *from products WHERE pid='$id'";

                    $result=mysqli_query($conn,$select);



                    ?>

                <h2 class="head">Edit Product</h2>
                <?php
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                    <form id="new_product" action="" method="post" enctype="multipart/form-data" class="form   w-100  ">
                  <table class="table borderless">
                    <tr class="">
                        <td>  
                            <label for="" class="form-text text-dark">Product Title</label>
                            <input type="text" class="form-control" value="<?php echo $data['product_title'];?>" name="ptitle" id="">
                        </td>
                        <td>  
                            <label for="" class="form-text">Product Description</label>
                            <input type="text" class="form-control" name="pdescription" value="<?php echo $data['product_description'];?>" id="">
                        </td>
                        <td>  
                            <label for="" class="form-text">Product Keyword</label>
                            <input type="text" class="form-control" value="<?php echo $data['product_keyword'];?>" name="pkeyword" id="">
                        </td>
                    </tr>


                    <tr>
                        <td>  
                            <label for="" class="form-text text-dark">Product Category</label>
                            <select name="pcategory"  class="form-control combobox" id="">
                            <option value="">Select Ccategory</option>
                           <?php
                                 
                                  $select="SELECT *from category";
                                  $result=mysqli_query($conn,$select);
                                  while($row=mysqli_fetch_array($result))
                                  {
                                    ?>
                                      <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                                    <?php
                                  }
                            ?>
                            
                            </select>
                        </td>
                        <td>  
                            <label for="" class="form-text">Product Brand</label>
                            
                            <select name="pbrand" class="form-control" id="">

                            <option value="">Select Brand</option>
                            <?php

                                  $select="SELECT *from brand";
                                  $result=mysqli_query($conn,$select);
                                  while($row=mysqli_fetch_array($result))
                                  {
                                    ?>
                                      <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                  }
                            ?>
                            </select>

                        </td>
                        <td>  
                            <label for="" class="form-text">Product Price</label>
                            <input type="text" class="form-control" value="<?php echo $data['product_price'];?>" name="pprice" id="">
                        </td>
                    </tr>


                    <tr>
                        <td>  
                            <label for="" class="form-text text-dark">Product Image 1</label>
                            <input type="file" class="form-control" name="pimage" id="">
                        </td>
                        <td>  
                                  <img src="<?php echo $data['product_image'];?>" style="width:140px; height:100px" alt="">
                        </td>
                        <td>  
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-primary p-1" value="Update" name="update" id="">
                        </td>
                        <td>
                        <input type="hidden" class="btn btn-primary p-1" value="<?php echo $data['pid'];?>" name="id" id="">
     
                        </td>
                        <td>
                          
                        </td>
                    </tr>
                  </table>
                </form>
<?php
                }
                
?>

                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>