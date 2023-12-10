<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $ShortText=$_POST['shortdesc'];
        $LongText=$_POST['longdesc'];
        $price=$_POST['price'];

        ?>
<!-- 
<script>
    alert("hello");
</script> -->
        <?php

        
        $img1_tmp_name=$_FILES['image1']['tmp_name'];
        $folder="images/";
        $target1=$folder.basename($_FILES['image1']['name']);
        move_uploaded_file($img1_tmp_name,$target1);

        $img2_tmp_name=$_FILES['image2']['tmp_name'];
        $folder="images/";
        $target2=$folder.basename($_FILES['image2']['name']);
        move_uploaded_file($img2_tmp_name,$target2);


        $img3_tmp_name=$_FILES['image3']['tmp_name'];
        $folder="images/";
        $target3=$folder.basename($_FILES['image3']['name']);
        move_uploaded_file($img3_tmp_name,$target3);

        $img4_tmp_name=$_FILES['image4']['tmp_name'];
        $folder="images/";
        $target4=$folder.basename($_FILES['image4']['name']);
        move_uploaded_file($img4_tmp_name,$target4);

        $img5_tmp_name=$_FILES['image5']['tmp_name'];
        $folder="images/";
        $target5=$folder.basename($_FILES['image5']['name']);
        move_uploaded_file($img5_tmp_name,$target5);


        $ins="INSERT INTO `sliderr`(`slideshortText`, `slideLongText`, `image1`, `image2`, `image3`, `image4`, `image5`, `off`) VALUES ('$ShortText' ,'$LongText' ,'$target1' , '$target2' , '$target3' , '$target4' , '$target5' ,'$price')";

        mysqli_query($conn, $ins);
        

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

    <title>Add Slider</title>

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
        
        include 'sidebar.php';

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

                <div class="container-fluid">
                    <h2 class="head">Add Slider</h2>
                    <form id="" action="" method="post" enctype="multipart/form-data" class="form   w-100  ">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slider Short description</label>
                            <textarea class="form-control" name="shortdesc" rows="2"></textarea>

                        </div>

                        <div class="mb-3">
                        
                            <label for="exampleInputEmail1" class="form-label">Slider Long description</label>
                            <textarea class="form-control" name="longdesc" rows="3"></textarea>

                        </div>

                        <div class="mb-3">
                        
                            <label class="form-label">Off Price</label>
                            <input type="text" class="form-control" name="price">
                        
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image 1</label>
                                    <input type="file" class="form-control" name="image1">
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image 2</label>
                                    <input type="file" class="form-control" name="image2">
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image 3</label>
                                    <input type="file" class="form-control" name="image3">
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image 4</label>
                                    <input type="file" class="form-control" name="image4">
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image 5</label>
                                    <input type="file" class="form-control" name="image5">
                                </div>
                            </div>


                        </div>






                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary">

                    </form>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; myshop 2023</span>
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