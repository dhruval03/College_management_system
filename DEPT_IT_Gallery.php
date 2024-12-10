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

   <!-- <script type="text/javascript" src="js/Gallery.js"></script> -->



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
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li><br>
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
  <div class="IT-dept-Gallery pt-50 pb-50">
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
          <div class="IT_Gallery_main">
            <div class="IT_Gallery-title">
              <h1>Gallery</h1>
            </div>
           
          
<!-- <Gallery start> -->
            <section id="portfolio">
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%" />
      <!-- <p>websites</p> -->
      <!-- <h3 class="grid__title"><b><H6>DELNET</H6></b></h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%"/>
      <!-- <p>pure css</p> -->
      <!-- <h3 class="grid__title"> front-end</h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%" />
      <!-- <p>web apps</p> -->
      <!-- <h3 class="grid__title"> full-stack</h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%" />
      <!-- <p>daily ui</p> -->
      <!-- <h3 class="grid__title"> ui/ux design</h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%" />
      <!-- <p>websites</p> -->
      <!-- <h3 class="grid__title"> front-end</h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="Facultys/DElnet.jpg" style="width:200%" />
      <!-- <p>pure css</p> -->
      <!-- <h3 class="grid__title"> front-end</h3> -->
      <div class="grid__overlay">
        <button class="viewbutton">DELNET</button>
      </div>
    </div>
    
    
    <div class="overlay">
      <div class="overlay__inner">
        <button class="close">close X</button>
        <img>
      </div>
    </div>
    
  </section>
  <!-- <Gallery end> -->
  
</div>
</div>
</div>
</div>
</div>


<?php
include("Footer.php")
?>
<!-- <script type="text/javascript">
            const buttons = document.querySelectorAll('.project');
const overlay = document.querySelector('.overlay');
const overlayImage = document.querySelector('.overlay__inner img');

function open(e) {
  overlay.classList.add('open');
  const src= e.currentTarget.querySelector('img').src;
  overlayImage.src = src;
}

function close() {
  overlay.classList.remove('open');
}

buttons.forEach(button => button.addEventListener('click', open));
overlay.addEventListener('click', close);
</script> -->



</body>
</html>


