<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Information Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="Logo/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/Department_style.css">
    <!-- <link rel="stylesheet" href="css/About_style.css"> -->


</head>

<body>
    <?php
    include("Header.php")
        ?>
    <div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <br>
                                <h1 class="white-color f-700">DEPARTMENT</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Information Technology</li>
                                        <li class="breadcrumb-item active" aria-current="page">About Department</li><br>
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
    <div class="IT-dept pt-50 pb-50">
        <div class="container">
            <div class="row">
                 <!-- card start -->
                <div class="col-xl-3 col-lg-0">
                <?php
              include("DEPT_card.php");
              ?>
                </div>
                 <!-- card end -->

                  <!-- About Department start -->
                    <div class="col-xl-9 col-lg-12">
                        <div class="about-IT mb-30">
                            <h1>About Department</h1>
                                <p>The Department offers 30 Seats in Under graduation course. The course covers Advance
                            microprocessors, Client server development, Networking, Communication, data structure, CG,
                            Image Processing, Database Management System, Information Security, UNIX/LINUX
                        </div>
                        <!-- About Department end -->
                        <div class="dept-horizontal-line">
                            <hr>
                        </div>
                            <!-- vision Mission start -->
                            <div id="IT-Vision_Mission" class="IT-Vision_Mission-area Vision_Mission-bg-height pt-100 pb-95">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="IT-Vision_Mission-left-title-section mb-30">
                                                <h1>Vision</h1>
                                                <ul>
                                                    <li>To provide excellent IT education and transform students into socially responsible industry ready IT professionals</li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="IT-vertical"></div>
                                        <div class="col-xl-5 col-lg-5">
                                            <div class="IT-Vision_Mission-right-title-section mb-30">
                                                <h1>Mission</h1>
                                                <ul>
                                                    <li>To make students industry ready by providing knowledge of basic to advanced IT tool and technologies.</li>
                                                    <li>To encourage and support the students in solving real world problems using IT</li>
                                                    <li>To make students aware of duties towards society, country and become responsible citizens</li>
                                                    <li>To integrate moral and ethical values in students</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- vision Mission end -->
                            <div class="dept-horizontal-line">
                                <hr>
                            </div>
                            <!-- PEO start -->
                            <div class="PEO-area">
                                <div class="about-IT-PEO mb-30">
                                    <h1>Program Educational Objectives (PEOs)</h1>
                                        <ul>
                                            <li>PEO - 1 : Continue their formal education and acquire relevant graduate degree programs.</li>
                                            <li>PEO - 2 : Solve real life problems as qualified professionals with a commitment towards society.</li>
                                            <li>PEO - 3 : Be a successful IT professional with ethical values and communication skills to work as an individual and team member.</li>
                                        </ul>
                                </div>
                            </div>
                            <!-- PEO end -->
                            <div class="dept-horizontal-line">
                                <hr>
                            </div>
                            <!-- PSO start -->
                            <div class="PSO-area">
                                <div class="about-IT-PSO mb-30">
                                    <h1>Program Specific Outcomes (PSO)</h1>
                                        <ul>
                                            <li>PSO 1 : Students will be able to develop stand-alone, web and mobile applications using the latest technologies, following professional ethics.</li>
                                            <li>PSO 2 : Students will be able to manage databases and information communication systems.</li>
                                        </ul>
                                </div>
                            </div>
                            <!-- PSO end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("Footer.php")
        ?>
</body>
</html>