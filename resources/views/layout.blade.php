<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cire Hire</title>
  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <!--Bootstrap-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!--Simple Line Icons-->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!--Owl Carousel-->
  <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
  <!--Select-->
  <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.css">
  <!--Theme Styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css">
  <!-- Reference either Knockout or AngularJS, if you do -->


 
<!-- DevExtreme themes -->
<link rel="stylesheet" href="css/dx.common.css">
<link rel="stylesheet" href="css/dx.light.css">

</head>
<body>
  <!--Top Bar-->
  
  <section class="row top-bar">
    <h2 class="hd-sec">Heading</h2>
    <div class="container">
      <div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>Wiber Alquiler de coches!</span></div>
      <ul class="social-lists-wSearch nav nav-pills">
        <li class="search-pop"><a href="#"><span class="ion-ios-search-strong"></span></a></li>
        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
        <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
        <li><a href="#"><i class="ion-social-rss"></i></a></li>
      </ul>
    </div>
  </section>
  <!--Info Bar-->
  <section class="row info-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-8 logo-box">
          <a href="index-2.html" class="logo"><img src="images/logo.png" alt=" wiber rent car" ></a>
        </div>
        <div class="col-sm-9 col-xs-4 info-box">
          <div class="header-informations hidden-xs">
            <div class="media info-media">
              <div class="media-left"><i class="ion-location"></i></div>
              <div class="media-body">
                <h5 class="this-top">3588 N  Stelling road, Brooklyn,</h5>
                <h5 class="this-bottom">NYC, United State.</h5>
              </div>
            </div>
            <div class="media info-media">
              <div class="media-left"><i class="ion-ios-telephone"></i></div>
              <div class="media-body">
                <h5 class="this-top">1800 - 112 - 8888/ EXT: 001</h5>
                <h5 class="this-bottom">Support@Supershine.com</h5>
              </div>
            </div>
            <div class="media info-media">
              <div class="media-left"><i class="ion-ios-clock"></i></div>
              <div class="media-body">
                <h5 class="this-top">Monday - Friday:</h5>
                <h5 class="this-bottom">08:00am ~ 05:00pm</h5>
              </div>
            </div>
          </div>
          <div class="cart-nav">
            
            <button type="button" class="navbar-toggle nav-hider collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <i class="ion-android-menu"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Navigation-->
  <nav class="navbar navbar-default main-navigation navbar-static-top">
    <div class="container">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">        
        <ul class="nav navbar-nav">
          <li class="active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index-2.html">home</a></li>
              <li><a href="index2.html">home 2</a></li>
            </ul>
          </li>
          <li><a href="about.html">about</a></li>
          <li><a href="services.html">services</a></li>
          <li><a href="contact.html">contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">blog <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="single.html">Details</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">fleet <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="fleet.html">fleet</a></li>
              <li><a href="fleet2.html">fleet 2</a></li>
              <li><a href="single-car.html">car details</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="404.html">404</a></li>
              <li><a href="coming-soon.html">coming soon</a></li>
            </ul>
          </li>
        </ul>     
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav> 
   @yield('content')
  <footer class="row site-footer">
      <div class="top-footer row m0">
        <div class="container">
          <div class="row ft">
            <!--Widget-->
            <div class="col-sm-12 col-md-3 widget footer-widget widget-about">
             <a href="index-2.html" class="logo"><img src="images/logo.png" alt=" wiber rent car" ></a>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <strong>vel illum dolore eu feugiat nulla facilisis</strong>.</p>
              <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
              <ul class="nav nav-pills social-nav">
                <li><a href="#" class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="Facbook"></a></li>
                <li><a href="#" class="ion-social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a></li>
                <li><a href="#" class="ion-social-googleplus" data-toggle="tooltip" data-placement="top" title="Google Plus"></a></li>
                <li><a href="#" class="ion-social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"></a></li>
              </ul>
            </div>
            <!--Widget-->
            <div class="col-sm-12 col-md-3 widget footer-widget widget-contact-info">
              <h4 class="widget-title">CONTACT INFO</h4>
              <ul class="nav foot-nav">
                <li><i class="ion-location"></i>3588 N  Stelling road, Brooklyn, NYC, United State.</li>
                <li><i class="ion-ios-telephone"></i>1800 - 112 - 8888/ EXT: 001</li>
                <li><i class="ion-email-unread"></i><a href="mailto:SuperHire@support.com.xxx">SuperHire@support.com.xxx</a></li>
              </ul>
              <div id="foot-map" class="google-map" data-lat="23.8932752" data-lon="90.3822415" data-marker="images/map-marker.png"></div>
            </div>
            <!--Widget-->
            <div class="col-sm-12 col-md-2 widget footer-widget widget-links">
              <h4 class="widget-title">Usefull link</h4>
              <ul class="nav foot-nav style2">
                <li><i class="fa fa-angle-double-right"></i><a href="#">FAQs</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">Membership</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">Exchange accepted</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">Help</a></li>
                <li><i class="fa fa-angle-double-right"></i><a href="#">Other</a></li>
              </ul>
            </div>
            <!--Widget-->
            <div class="col-sm-12 col-md-4 widget footer-widget widget-contact">
              <h4 class="widget-title">CONTACT &amp; SUBCRIBE US</h4>
              <div class="row m0 contact-form-info">
                <form action="http://html.bdiakcml8h-e92498n216kr.p.runcloud.link/supershine/contact_process.php" class="foot-contct-form contactForm row m0">
                  <div class="input-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
                    <span class="input-group-addon"><i class="ion-person"></i></span>
                  </div>
                  <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                    <span class="input-group-addon"><i class="ion-email-unread"></i></span>
                  </div>
                  <div class="input-group">
                    <textarea name="message" id="message" class="form-control" placeholder="Your messages"></textarea>
                    <span class="input-group-addon"><i class="ion-android-chat"></i></span>
                  </div>
                  <div class="row m0">
                    <input type="checkbox" name="subscribe" id="subscribe" class="sr-only  contact-checkbox">
                    <label for="subscribe">Also subscribe to your e-mail *</label>
                  </div>
                  <input type="submit" value="SEND MESSENGE" class="btn btn-primary">
                  <div class="foot-msg"><span>(*)</span> : We never spam your email</div>
                </form>
                <div id="success"><span>Your message sent successfully.</span></div>
                <div id="error"><span>Something wrong here!.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-footer row m0">
        <div class="container">
          <div class="row">
            Copyright © 2017 by <a href="#">Haintheme</a>. Designed by <a href="#">PukDG</a>. All rights reserved!
          </div>
        </div>
      </div>
    </footer>    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/gmaps.min.js"></script>
    <!--Contact-->    
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
    <!--CounterUp-->
    <script src="vendors/couterup/jquery.counterup.min.js"></script>
    <!--WayPoints-->
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <!--Select-->
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!--Instafeed-->
    <script src="vendors/instafeed/instafeed.min.js"></script>
    <!-- Isotope -->
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.min.js"></script>
    <!--Theme Script-->    
    <script src="js/theme.js"></script>

<!-- DevExtreme library -->
<script type="text/javascript" src="js/dx.all.js"></script>
<script type="text/javascript" src="js/knockout-latest.js"></script>
<script type="text/javascript" src="js/bootstrap-typeahead.min.js"></script>
<script type="text/javascript">
  $(() => {
  //const date = new Date(2018, 9, 16, 15, 8, 12);

  $('#Pickup_Dat').dxDateBox({
    placeholder: '12/31/2018, 2:52 PM',
    type: 'datetime',
    showClearButton: true,
    useMaskBehavior: true,
     inputAttr: {
            name: "Pickup_Dat"
        },
  });
$('#Drop_Date').dxDateBox({
    placeholder: '12/31/2018, 2:52 PM',
    type: 'datetime',
    showClearButton: true,
    useMaskBehavior: true,
    inputAttr: {
            name: "Drop_Date"
        },
  });

$('#location').typeahead({
  source: [
    { id: 2, name: 'Alicante' ,},
    { id: 3, name: 'Mallorca' },
    { id: 4, name: 'Malaga' },
    { id: 5, name: 'Valencia' },

  ],
  valueField:'id',
   // displayField:'name',
   // autoSelect:true,


});



});
</script>
  </body>
  </html>