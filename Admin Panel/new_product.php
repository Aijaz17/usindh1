<?php

    include 'connection.php';

    if(isset($_POST['submit']))
    {
        $ptitle=$_POST['ptitle'];
        $pdescription=$_POST['pdescription'];
        $pkeyword=$_POST['pkeyword'];
        $pcategory=$_POST['pcategory'];

        $pbrand=$_POST['pbrand'];

        $pcolor=$_POST['pcolor'];
        $psize=$_POST['psize'];

        $pprice=$_POST['pprice'];

        $img_tmp_name=$_FILES['pimage']['tmp_name'];
        $folder="images/";
        $target=$folder.basename($_FILES['pimage']['name']);
        move_uploaded_file($img_tmp_name,$target);

        $insertt="INSERT INTO `products`(`product_title`, `product_description`, `product_keyword`, `product_category`, `product_brand`, `product_price`, `product_image` ,`Colorid`, `sizeId`) VALUES ('$ptitle' , '$pdescription' , '$pkeyword' ,'$pcategory' , '$pbrand' ,'$pprice'  ,  '$target' ,'$pcolor' , '$psize')";

        mysqli_query($conn , $insertt);

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

    <title>New Products</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


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

include 'topnav.php';

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid ">

                <h2 class="head">New Product</h2>
                <form id="new_product" action="" method="post" enctype="multipart/form-data" class="form   w-100  ">
                  <table class="table borderless">
                    <tr class="">
                        <td>  
                            <label for="" class="form-text text-dark">Product Title</label>
                            <input type="text" class="form-control" name="ptitle" id="">
                        </td>
                        <td>  
                            <label for="" class="form-text">Product Description</label>
                            <input type="text" class="form-control" name="pdescription" id="">
                        </td>
                        <td>  
                            <label for="" class="form-text">Product Keyword</label>
                            <input type="text" class="form-control" name="pkeyword" id="">
                        </td>
                    </tr>


                    <tr>
                        <td>  
                            <label for="" class="form-text text-dark">Product Category</label>
                            <select name="pcategory"  class="form-control combobox" id="">
                            <option value="">Select Category</option>
                           <?php
                                  include 'connection.php';
                                  $select="SELECT *from category";
                                  $result=mysqli_query($conn,$select);
                                  while($row=mysqli_fetch_array($result))
                                  {
                                    ?>
                                      <option  value="<?php echo $row['cat_id']; ?>"> <?php echo $row['category_name']; ?> </option>
                                    
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
                                      <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                  }
                            ?>
                            </select>

                        </td>

                        <td>  
                            <label for="" class="form-text">Product Color</label>
                            
                            <select name="pcolor" class="form-control" id="">

                            <option value="">Select Color</option>
                            <?php

                                  $selColor="SELECT * from color";
                                  $result2=mysqli_query($conn,$selColor);
                                  while($colorrow=mysqli_fetch_array($result2))
                                  {
                                    ?>
                                      <option value="<?php echo $colorrow['Colorid']; ?> " > <?php echo $colorrow['colorName']; ?> </option>
                                    <?php
                                  }
                            ?>
                            </select>

                        </td>


                      
                    </tr>


                    <tr>
                        
                    <td>  
                            <label for="" class="form-text">Product Size</label>
                            
                            <select name="psize" class="form-control" id="">

                            <option value="">Select Size</option>
                            <?php

                                  $selsize="SELECT * from size";
                                  $result3=mysqli_query($conn,$selsize);
                                  while($sizerow=mysqli_fetch_array($result3))
                                  {
                                    ?>
                                      <option value="<?php echo $sizerow['sizeId']; ?> " > <?php echo $sizerow['Sizename']; ?> </option>
                                    <?php
                                  }
                            ?>
                            </select>

                        </td>


                    <td>  
                            <label for="" class="form-text">Product Price</label>
                            <input type="text" class="form-control" name="pprice" id="">
                        </td>

                        <td>  
                            <label for="" class="form-text text-dark">Product Image 1</label>
                            <input type="file" class="form-control" name="pimage" id="">
                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                            
                            <input type="submit" class="btn btn-primary p-1" name="submit" id="">

                        </td>

                        <td>
                            
                        </td>
                        <td>
                          
                        </td>
                    
                    </tr>

                  </table>
                </form>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
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