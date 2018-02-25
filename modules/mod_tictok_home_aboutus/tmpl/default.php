<section id="<?php echo $cat_alias->caalias;?>" class="about">
    <div class="container">
        <div class="row">
            <div class="mobile-features">
                <!-- Start Mobile Slider -->
                <div class="col-md-4">
                    <div class="features-slider owl-carousel owl-theme wow fadeInLeft" data-wow-duration="1s">
                        <?php foreach ($about_section as $aboutsection){?>
                        <div class="item">
                            <div class="single-feat-img">
                                <img src="<?php echo JURI::base().json_decode($aboutsection->images)->image_intro; ?>" alt="Applora" class="img-responsive">
                            </div>
                        </div>
                        <?php }?>
<!--                        <div class="item">-->
<!--                            <div class="single-feat-img">-->
<!--                                <img src="http://placehold.it/750x1334" alt="Applora" class="img-responsive">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        -->
<!--                        <div class="item">-->
<!--                            <div class="single-feat-img">-->
<!--                                <img src="http://placehold.it/750x1334" alt="Applora" class="img-responsive">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="single-feat-img">-->
<!--                                <img src="http://placehold.it/750x1334" alt="Applora" class="img-responsive">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="single-feat-img">-->
<!--                                <img src="http://placehold.it/750x1334" alt="Applora" class="img-responsive">-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
                <!-- End Mobile Slider -->
                <!-- Start Mobile Slider Content -->
                <div class="col-md-8">
                    <!-- Start Slider Links -->
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active-icon" data-owl-item="0"><a href="#tab_1" data-toggle="pill"><i class="fa fa-commenting-o"></i></a></li>
                        <li data-owl-item="1"><a href="#tab_2" data-toggle="pill"><i class="fa fa-bell-o"></i></a></li>
                        <li data-owl-item="2"><a href="#tab_3" data-toggle="pill"><i class="fa fa-filter"></i></a></li>
                        <li data-owl-item="3"><a href="#tab_4" data-toggle="pill"><i class="fa fa-sliders"></i></a></li>
                        <li data-owl-item="4"><a href="#tab_5" data-toggle="pill"><i class="fa fa-rocket"></i></a></li>
                    </ul>
                    <!-- End Slider Links -->
                    <div class="tab-content">
                        <!-- Start Single One -->
                        <?php $x=0; $y=0; $classdefine="";
                        foreach ($about_section as $aboutsection){ if($x==0){$classdefine="active";}?>
                        <div class="tab-pane <?php echo $classdefine ?>" id="tab_<?php echo $y;?>" data-owl-item="<?php echo $x;?>">
                            <h4><?php echo $aboutsection->title; ?></h4>
                            <p><?php echo $aboutsection->introtext; ?></p>
                        </div>
                        <?php $x++; $y++;} ?>
                        <!-- End Single One -->
<!--                        <!-- Start Single One -->
<!--                        <div class="tab-pane" id="tab_b2" data-owl-item="1">-->
<!--                            <h4>Push Notifications</h4>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, perspiciatis, deleniti! Ea tenetur eum quae commodi, dicta pariatur enim nisi autem repudiandae obcaecati necessitatibus dolorum reiciendis.</p>-->
<!--                        </div>-->
<!--                        <!-- End Single One -->
<!--                        <!-- Start Single One -->
<!--                        <div class="tab-pane" id="tab_c" data-owl-item="2">-->
<!--                            <h4>Filtering & Anti-Spam</h4>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nulla voluptates nihil sapiente, quae voluptatum, sed architecto iure recusandae consequuntur ipsa! Repellat et qui recusandae deserunt, aliquid veritatis illum voluptate.</p>-->
<!--                        </div>-->
<!--                        <!-- End Single One -->
<!--                        <!-- Start Single One -->
<!--                        <div class="tab-pane" id="tab_d" data-owl-item="3">-->
<!--                            <h4>Chat Analytics</h4>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur placeat distinctio veritatis voluptate nihil error voluptatum omnis totam, reiciendis quam porro labore ipsum ut deleniti, sit in quo eaque consectetur!</p>-->
<!--                        </div>-->
<!--                        <!-- End Single One -->
<!--                        <!-- Start Single One -->
<!--                        <div class="tab-pane" id="tab_e" data-owl-item="4">-->
<!--                            <h4><span>Applora App</span> Fast Loading</h4>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloremque omnis, reiciendis ducimus. Possimus hic et repellendus. Aut quae error laborum, ipsa a eius voluptates iste magnam, ratione qui sed!</p>-->
<!--                        </div>-->
<!--                        <!-- End Single One -->
                        <!-- Start Single One -->
                    </div>
                    <!-- End tab content -->
                </div>
                <!-- End Mobile Slider Content -->
            </div>
            <!-- End mobile-features -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Container -->
</section>