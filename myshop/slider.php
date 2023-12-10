<?php

include 'connection.php';
$selSlider="SELECT * FROM `sliderr` ";

$slrun=mysqli_query($conn, $selSlider);


?>

<div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <?php

    while($sldata=mysqli_fetch_array($slrun))
    {
        
    ?>
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="../Admin Panel/<?php echo $sldata['image1']; ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo $sldata['slideshortText'];  ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo $sldata['slideLongText'];  ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="../Admin Panel/<?php echo $sldata['image2']; ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo $sldata['slideshortText'];  ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo $sldata['slideLongText'];  ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="../Admin Panel/<?php echo $sldata['image3']; ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo $sldata['slideshortText'];  ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo $sldata['slideLongText'];  ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="../Admin Panel/<?php echo $sldata['image3']; ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="../Admin Panel/<?php echo $sldata['image2']; ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <?php


}
?>
        </div>
    </div>
