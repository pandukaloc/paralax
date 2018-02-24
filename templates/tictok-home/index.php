<?php
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="" content="">
    <meta name="author" content="Alaa Ahmed">

    <!-- Page Title -->
    <title>tictok</title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://placehold.it/16x16" />

    <!--
            Google Font
            ================================================== -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--
            CSS Files
            ================================================== -->

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/asset/css/plugins.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/asset/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/asset/css/colors/theme-color04.css">

    <!-- Modernizer Script for old Browsers -->
    <script src='<?php echo $this->baseurl ?>/templates/asset/js/modernizr-2.6.2.min.js'></script>
</head>

<body>

<!--
    Start Header
    ==================================== -->

<header id="home" class="home bg-image bigTine">
    <div id="bg-shader" data-ambient-color="#c21500" data-diffuse-color="#ffc500"></div>

    <!-- Start Navigation Bar -->

    <jdoc:include type="modules" name="mod_tictok_home_navigation" />


    <!-- End Navigation Bar -->

    

            <jdoc:include type="modules" name="mod_tictok_home_banner" />
            <!-- End Photo Here -->
      
    <!-- End Container -->
</header>
<!-- End Header -->

<!--
    End Header
    ==================================== -->
<!--
    Start About Section
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_aboutus" />
<!--
    End About Section
    ==================================== -->

<!--
    Start Features Section
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_features" />
<!--
    End Features Section
    ==================================== -->

<!--
    Start Random Features
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_randomfeatures" />

<!--
    End Random Features
    ==================================== -->

<!--
    Start Download Section
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_downloadsection" />

<!--
    End Download Section
    ==================================== -->

<!--
    Start Screenshot Section
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_screenshots" />


<!--
    End Screenshot Section
    ==================================== -->

<!--
    Start Statistics App
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_statis" />


<!--
    End Statistics App
    ==================================== -->

<!--
Start Testimonials App
==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_testimonials" />

<!--End Testimonials App
    ==================================== -->

<!--
    Start Video App
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_video_app" />

<!--
    End Video App
    ==================================== -->

<!--
    Start Pricing Table
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_pricing" />



<!--
    End Pricing Table
    ==================================== -->

<!--
    Start Meet Our Team
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_ourteam" />

<!--
    End Meet Our Team
    ==================================== -->

<!--
    Start Our Story
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_ourstory" />


<!--
    End Our Story
    ==================================== -->

<!--
    Start Faqs App
    ==================================== -->

<jdoc:include type="modules" name="mod_tictok_home_faq" />
<!--
    End Faqs App
    ==================================== -->

<!--
    Start Our Blog
    ==================================== -->
<jdoc:include type="modules" name="mod_tictok_home_newssection" />
<!--End Our Blog
    ==================================== -->

<!--
    Start Contact Us
    ==================================== -->

<section id="contact-us" class="contact-us">
    <div class="overlay">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                        <h2>Get In Touch</h2>
                        <span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <div class="row">
                <!-- Start Google Map -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                    <div class="mobile-place">
                        <div class="mobile-preview">
                            <div class="google-map-area">
                                <div id="contacts" class="map-area">
                                    <div id="googleMap" style="width:100%;height:395px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Google Map -->
                <!-- Start Form & Info -->
                <div class="col-md-8">
                    <div class="row">
                        <!-- Start Address Info -->
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="single-info">
                                <div class="icon-contact">
                                    <i class="icon-location-pin"></i>
                                </div>
                                <div class="info-text">
                                    <h4>Address</h4>
                                    <p>Table Rock, NE 68447, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Address Info -->
                        <!-- Start Phone Info -->
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <div class="single-info">
                                <div class="icon-contact">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="info-text">
                                    <h4>Phone</h4>
                                    <p>+20 111 222 6789</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Phone Info -->
                        <!-- Start E-Mail Info -->
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                            <div class="single-info">
                                <div class="icon-contact">
                                    <i class="icon-envelope"></i>
                                </div>
                                <div class="info-text">
                                    <h4>E-Mail</h4>
                                    <p>support@applora.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- End E-Mail Info -->
                        <!-- Start Contact Form -->
                        <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                            <div class="contact-form">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="E-Mail" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Subject" required>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="Contact Message" id="msg-contact" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="butt-send">
                                                <a href="#" class="bttn-applora-gradient">
                                                    <i class="fa fa-paper-plane-o"></i>
                                                    <span>Send Message</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End Form & Info -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End overlay -->
</section>
<!-- End contact-us -->

<!--
    End Contact Us
    ==================================== -->

<!--
    Start Footer
    ==================================== -->

<footer id="footer" class="footer">
    <div class="container">
        <!-- Start Subscribe Button -->
        <div class="subscribe-box">
            <div class="subscribe-text wow fadeInUp" data-wow-duration="1s">
                <h4>Subscribe for our Newsletter</h4>
            </div>
            <div class="wow fadeInUp" data-wow-duration="1s">
                <form class="subscribe-form custom-input name-email clearfix" action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your Email Address..." required />
                    <button class="btn" type="submit" name="submit">
                        <i class="icon-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- End Subscribe Button -->
        <!-- Start Logo Footer -->
        <div class="logo-footer wow fadeInUp" data-wow-duration="1s">
            <a href="#">
                <img src="http://placehold.it/343x295" alt="Applora" title="Applora">
            </a>
        </div>
        <!-- End Logo Footer -->
        <!-- Start Social Links -->
        <div class="social-footer text-center wow fadeInUp" data-wow-duration="1s">
            <a class="social-applora-gradient" href="#"><i  class='fa fa-facebook'></i></a>
            <a class="social-applora-gradient" href="#"><i  class='fa fa-twitter'></i></a>
            <a class="social-applora-gradient" href="#"><i  class='fa fa-behance'></i></a>
            <a class="social-applora-gradient" href="#"><i  class='fa fa-linkedin'></i></a>
            <a class="social-applora-gradient" href="#"><i  class='fa fa-pinterest'></i></a>
        </div>
        <!-- End Social Links -->
        <!-- Start Copyright -->
        <div class="copyright text-center wow fadeInUp" data-wow-duration="1s">
            <p>Copyright © 2018 <a href="https://themeforest.net/user/alaa_ahmed/portfolio">Tekto</a>. All Rights Reserved.</p>
        </div>
        <!-- End Copyright -->
    </div>
    <!-- End container -->
</footer>
<!-- End footer -->

<!--
    End Footer
    ==================================== -->

<!--
    Start Back To Top
    ==================================== -->

<div id="scroll-top">
    <i class="fa fa-angle-up fa-2x"></i>
</div>

<!--
    End Back To Top
    ==================================== -->

<!--
    Start Preloader
    ==================================== -->

<div id="loading-mask">
    <div class="loader">
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
    </div>
</div>

<!--
    End Preloader
    ==================================== -->

<!--
        JS Files
        ==================================== -->

<!-- Plugins -->
<script src="<?php echo $this->baseurl ?>/templates/asset/js/plugins.js"></script>
<!-- Shader -->
<script src="<?php echo $this->baseurl ?>/templates/asset/js/shader-run.js"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
<!-- Custom JS -->
<script src="<?php echo $this->baseurl ?>/templates/asset/js/custom.js"></script>
<script>
    // Google Map
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(30.596492, 32.271459)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            icon: 'https://image.ibb.co/bCubew/map_marker.png',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>

</html>