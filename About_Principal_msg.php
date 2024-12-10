<?php
include("configuration/config.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Principal Message</title>
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
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/About_style.css">
</head>

<body>
    <?php
    include("Header.php");
    ?>

    <div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <br>
                                <h1 class="white-color f-700">ABOUT</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Principal Message</li>
                                        <br>
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
    <div class="principal-msg"><br>
        <div class="card col-md-7 mx-auto"><br>
            <div class="principal-msg-area"> <?php
                 $sql = "select * from about_college where About_college_id=10";
                 $query_run = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($query_run) > 0) {
                 foreach ($query_run as $row) { ?>
                 <h1><?php echo $row['About_college_title']; ?></h1>
                    <?php
                    $sql = "select * from principal_details where Pr_id=13";
                    $query_run = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row2) {
                    ?>
                        <div class="principal-msg-img">
                        <?php $img_P = "Admin_Panel/Images (Uploads)/" . $row2['Pr_image'];?>
                        <img src="<?php echo $img_P ?>">

                        <div class="Principal-msg-intro-section">
                            <h3>Name: <?php echo $row2['Pr_name'];?></h3>
                            <h3>Email: <?php echo $row2['Pr_email_id'];?></h3>
                            <h3>State: <?php echo $row2['Pr_state'];?> </h3>
                        </div>
                    </div>
                        <?php
                          }
                         } ?>
                        <div class="Principal-msg-title-section">
                            <p>
                                <?php echo $row['About_college_description']; ?>
                        </div>
                <?php
                     }
                } ?>
                <div>
                </div>
            </div>
        </div>
        <br><br><br>
        <?php
        include("Footer.php")
        ?>
</body>

</html>