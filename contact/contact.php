<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>SIM3D |Contact Us</title>
<!-- Title Icon -->
<link rel="icon" href="../title.png" type="image/icon type">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="../plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="../plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="../plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
<section class="fixed-top navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="../service.php">Programs</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../products.php">Products</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about.php">About Us</a>

          </li>

           
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact Us</a>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->

<!-- contact -->
<section class="section-lg contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Contact Us</h2>
            </div>
        </div>
        <div class="row contact-bg p-5 rounded mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
              <h4 class="notification"></h4>
                <form method="post" id="contact">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                    <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
                    <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                    <textarea name="msg" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                    <button type="submit" onclick="sendEmail()" value="send" class="btn btn-secondary">SEND MESSAGE</button>
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript">
            function sendEmail(){
              var name=$("#name");
              var email=$("#mail");
              var subject=$("#subject");
              var msg=$("#msg");

              if(isNotEmpty(name) && isNotEmpty(subject && isNotEmpty(msg))){
                $.ajax({
                  url: 'sendEmail.php',
                  method: 'POST',
                  dataType: 'json',
                  data:{
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    msg: msg.val()
                    
                  },success: function(response){
                    $('#contact')[0].rest();
                    $('.notification').text("Message sent succesfully.");
                  }
                })
              }
            }     
              function isNotEmpty(caller){
                if(caller.val()==""){
                  caller.css("botder","1px solid red");
                  return false;

                }else{
                  caller.css("border","");
                  return true;
                }
              }
            </script>      
            <div class="col-lg-5">
                <p class="mb-5">If you'll like to know more about our experience designing, or get advice on your own technology challenges get in touch. With dedicated engineers on-hand 24/7,      we’re set up to become an extension of your team.</p>
                <a href="tel:+442081446356" class="text-color h5 d-block">+216 90 265 796</a>
                <a href="mailto:contact@sim3d-engineering.com" class="mb-5 text-color h5 d-block">contact@sim3d-engineering.com

                </a>
                <p>Ariana, Cite Ghazela Tunisia</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Sales</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-desktop round-icon green mr-2"></i> Help & Support</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-panel round-icon orange mr-2"></i> Legal Departments</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img class="contact-bg-1 up-down-animation" src="../images/background-shape/feature-bg-2.png" alt="background-shape">
    <img class="contact-bg-2 left-right-animation" src="../images/background-shape/green-half-cycle.png" alt="background-shape">
    <img class="contact-bg-3 up-down-animation" src="../images/background-shape/green-dot.png" alt="background-shape">
    <img class="contact-bg-4 left-right-animation" src="../images/background-shape/service-half-cycle.png" alt="background-shape">
    <img class="contact-bg-5 up-down-animation" src="../images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /contact -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(../images/backgrounds/footerbg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="../index.php">
          <img class="img-fluid" src="../images/logo.png" alt="logo">
        </a>
      </div>
    <!-- footer menu -->
    <nav class="col-lg-8 align-self-center mb-5">
      <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="../index.php">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="../service.php">Programs</a></li>
          <li class="list-inline-item"><a href="../products.php">Products</a></li>
          <li class="list-inline-item"><a href="../about.php">About Us</a></li>
          <li class="list-inline-item"><a href="../contact.php">Contact Us</a></li>
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
<script src="../plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="../plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="../plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="../js/script.js"></script>

</body>
</html>