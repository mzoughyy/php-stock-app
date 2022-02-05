<?php

require("config/adding.php");
$Produits=display();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>SIM3D |Our Products</title>
<!-- Title Icon -->
<link rel="icon" href="title.png" type="image/icon type">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="css/product.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
<section class="fixed-top navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="service.php">Programs</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>

          </li>

           
          <li class="nav-item">
            <a class="nav-link" href="contact/contact.php">Contact Us</a>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->

<!-- hero area -->
<section class="hero-section hero" data-background="" style="background-image: url(images/hero-area/bannerbg1.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center zindex-1">
        <h1 class="mb-3">​We believe in a future <br>
          where computing machines improve our lives.</h1>
        <p class="mb-4">Together, We Make Succesful Solutions.<br>
          </p>
          <a href="contact.php" class="btn btn-secondary btn-lg">Contact Us</a>
        <!-- banner image -->
        <img class="img-fluid w-100 banner-image" src="images/hero-area/kk.jpg" alt="banner-img" id="banner">
      </div>
    </div>
  </div>


  <!-- background shapes -->
  <div id="scene">
    <img class="img-fluid hero-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">
    <img class="img-fluid hero-bg-2 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-3 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-4 up-down-animation" src="images/background-shape/green-dot.png" alt="">
    <img class="img-fluid hero-bg-5 left-right-animation" src="images/background-shape/blue-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-6 up-down-animation" src="images/background-shape/seo-ball-2.png" alt="">
    <img class="img-fluid hero-bg-7 left-right-animation" src="images/background-shape/yellow-triangle.png" alt="">
    <img class="img-fluid hero-bg-8 up-down-animation" src="images/background-shape/service-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
  </div>
</section>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
<h2 class="section-title">Our Products</h2>
</div>
</div>
</div>


<!-- /hero-area -->
        <!-- Section-->
        <section class="py-5">

        
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach($Produits as $produit): ?>

                    <div class="col mb-5">
                        <div class="card h-100">
                          <!-- product dispo !-->
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $produit->dispo ?></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="<?= $produit->image ?>" alt="..."  />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $produit->name ?></h5>
                                    <p><?= substr($produit->infos,0,60) ?></p>
                                    <!-- Product price-->
                                    <?= $produit->price. " DT" ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Place Order</a></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                   

        </section>
        
        <!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footerbg.png);">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
          <!-- logo -->
          <a href="index.html">
            <img class="img-fluid" src="images/logo.png" alt="logo">
          </a>
        </div>
        <!-- footer menu -->
        <nav class="col-lg-8 align-self-center mb-5">
          <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="index.php">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="service.php">Programs</a></li>
          <li class="list-inline-item"><a href="products.php">Products</a></li>
          <li class="list-inline-item"><a href="about.php">About Us</a></li>
          <li class="list-inline-item"><a href="contact/contact.php">Contact Us</a></li>
          </ul>
        </nav>
        <!-- footer social icon -->
        <nav class="col-12">
          <ul class="list-inline text-lg-right text-center social-icon">
            <li class="list-inline-item">
              <a class="facebook" href="#"><i class="ti-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="linkedin" href="https://www.linkedin.com/company/sim3d/"><i class="ti-linkedin"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="black" href="https://sim3d-engineering.com/"><i class="ti-world"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
  <!-- /footer -->
  
  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- venobox -->
  <script src="plugins/Venobox/venobox.min.js"></script>
  <!-- aos -->
  <script src="plugins/aos/aos.js"></script>
  <!-- Main Script -->
  <script src="js/script.js"></script>
  
  </body>
  </html>