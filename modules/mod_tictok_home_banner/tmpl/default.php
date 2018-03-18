

<?php foreach ($banner_content as $banner_contents) {?>
  <div class="container">
                <div class="row">
                    <!-- Start Text Header -->
                    <div class="col-md-12 col-sm-12">
                        <div class="header-inner">
                            <div class="header-content text-center">
                            <div class="wrap_h1">
                                <h1 class="home-title word word--magneto wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s"><?php echo $banner_contents->title; ?></h1></div>
                                <h4 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo $banner_contents->introtext; ?></h4>
                                <div class="bttn-head">
                                    <a href="#video-app" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                        <i class="icon-control-play"></i>
                                        <span>Demo Video</span>
                                    </a>
                                    <a href="#contact-us" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                        <i class="icon-call-out"></i>
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- End Text Header -->
                    <!-- Start Photo Here -->
                <!--     <div class="col-md-5 col-sm-6">
                        <div class="photo-header">
                            <img src="<?php //echo JURI::base().json_decode($banner_contents->images)->image_intro; ?>" alt="Applora Screen" class="img-responsive wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
                        </div>
                    </div> -->
                    <!-- End Photo Here -->
                </div>
            </div>
<?php } ?>
