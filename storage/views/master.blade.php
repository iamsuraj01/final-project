
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Repair - Quality Repairing</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{URL::to('/')}}/public/img/favicon.png" rel="icon">
  <link href="{{URL::to('/')}}/public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{URL::to('/')}}/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{URL::to('/')}}/public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
  <link href="{{URL::to('/')}}/public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" >
  <link href="{{URL::to('/')}}/public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{URL::to('/')}}/public/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Repairr.com</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li class="menu-has-children"><a href="">About Us</a>
            <ul>
              <li><a href="#">Who are we?</a></li>
              <li><a href="#">Why hire us?</a></li>
              <li><a href="#">How do we serve?</a></li>
              <li><a href="#">Service Gurantee</a></li>
            </ul>
          </li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Payment</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#login">Log In</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  @yield('content')
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{URL::to('/')}}/public/lib/jquery/jquery.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/easing/easing.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/superfish/hoverIntent.js"></script>
  <script src="{{URL::to('/')}}/public/lib/superfish/superfish.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/wow/wow.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/waypoints/waypoints.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/counterup/counterup.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{URL::to('/')}}/public/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{URL::to('/')}}/public/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{URL::to('/')}}/public/js/main.js"></script>

</body>
</html>
