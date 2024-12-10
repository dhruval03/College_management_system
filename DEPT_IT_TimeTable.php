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
                                        <li class="breadcrumb-item active" aria-current="page">Time Table</li><br>
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
    <div class="IT-dept-TT pt-50 pb-50">
        <div class="container">
            <div class="row">
                <!-- card start -->
                <div class="col-xl-3 col-lg-0">

                <?php
              include("DEPT_card.php");
              ?>
                </div>
                <!-- card end -->

                <div class="col-xl-3 col-lg-3 col-md-6">

                <!-- first sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-1</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>


                    <div class="IT_TT-horizontal_line">
                        <hr>
                    </div>

 <!-- first sem time table end -->

  <!-- second sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-2</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>

                    <div class="IT_TT-horizontal_line">
                        <hr>
                    </div>
 <!-- second sem time table end -->

 <!-- third sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-3</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>

                    <div class="IT_TT-horizontal_line">
                        <hr>
                    </div>
                
                    <!-- third sem time table end -->

                    <!-- fourth sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-4</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>

                    <div class="IT_TT-horizontal_line">
                        <hr>
                    </div>
                
                    <!-- fourth sem time table end -->

                    <!-- fifth sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-5</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>

                    <div class="IT_TT-horizontal_line">
                        <hr>
                    </div>
                
                    <!-- fifth sem time table end -->

                    <!-- sixth sem time table start -->
                    <div class="sem-1_TT_IT">
                        <div class="IT_TT-title">
                            <h1>ACADEMIC TIMETABLE SEMESTER-6</h1>
                        </div>

                        <div class="IT_TT_Sem-1">
                            <iframe src="PDFs/daigram.pdf" width="350%" height="550"></iframe>
                        </div>
                    </div>

                  
                
                    <!-- sixth sem time table end -->

                </div>
            </div>

        </div>

    </div>

    <?php
    include("Footer.php")
    ?>
</body>

</html>