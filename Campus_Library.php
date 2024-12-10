<?php
include("configuration/config.php");
?>


<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LE-college</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="Logo/logo.png">
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/index_style.css">
    <!-- <link rel="stylesheet" href="css/About_style.css"> -->

    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/homepage_Slider.css">
 
    <link rel="stylesheet" href="css/Campus_Library.css">
	 


    

</head>

<body>
    
<?php
    include('Header.php');
    ?>
     <div class="slider-area">
        <div class="page-title">
            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <br>
                                <h1 class="white-color f-700">Campus</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li><br>
                                        <li class="breadcrumb-item"></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                        <div class="Campus_Library mb-30">
   
                        <!-- About Department end -->
                        <div class="Campus_Library-horizontal-line">
                            <!-- <hr> -->
                        </div>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/Slider_1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <!-- <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s" style="font-size: 50px;"><span>Welcome To</span><br>L.E. College(Diploma),Morbi</h1> -->
                                <!-- <p data-animation="fadeInUp" data-delay=".4s">To provide an atmospher for student and faculty <br> for continuous learning to investigate,apply and transfer knowledge</p> -->
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><a href="Login.php"><span class="btn-text">Login</span></a></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/Slider_3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 offset-xl-2">
                            <div class="slider-content slider-content-2 text-center">
                                <!-- <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s" style="font-size: 50px;"><span>Welcome To</span><br>L.E. College(Diploma),Morbi</h1> -->
                                <!-- <p data-animation="fadeInUp" data-delay=".4s">To provide an atmospher for student and faculty <br> for continuous learning to investigate,apply and transfer knowledge</p> -->
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><a href="Login.php"><span class="btn-text">Login</span></a></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(img/slider/Slider_2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <!-- <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s" style="font-size: 50px;"><span>Welcome To</span><br>L.E. College(Diploma),Morbi</h1> -->
                                <p data-animation="fadeInUp" data-delay=".4s"></p>
                                <!-- <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><a href="Login.php"><span class="btn-text"></span></a></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div class="Campus_Library-horizontal-line">
                            <hr>
                        </div>
                        <div class="col-xl-9 col-lg-12">
                        <?php
                 $sql = "select * from campus_facility_details where Cf_id=2";
                 $query_run = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($query_run) > 0) {
                 foreach ($query_run as $row) { ?>
                 
<!-- <h1 style="margin-left:5%"><?php echo $row['Cf_title']; ?></h1> -->
    
    <?php echo $row['Cf_description']; ?>
</div>
</div>
<?php
                          }
                         } ?>
                        <div id="about" class="about-SSIP-area2 pt-50 pb-50">
                            <div class="Campus_Library-horizontal-line">
                            <hr>
                        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-10">
                    <div class="Campus_Library-title-section3 mb-30">
                        
                        <h1>table</h1>
                    </div>
                </div>
            </div>
        </div>
        
                            <table class="Campus_Library_table">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <div class="Campus_Library-horizontal-line">
                            <hr>
                        </div>

    

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php
            include("Footer.php")
        ?>
</body>


</html>