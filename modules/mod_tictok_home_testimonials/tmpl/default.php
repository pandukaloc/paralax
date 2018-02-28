<section id="<?php echo $cat_alias->caalias ?>" class="testimonials02 whbg">

	<div class="container text-center">
		<!-- Start Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					<h2><?php echo $about_section[0]->catitle; ?></h2>
					<span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
				</div>
			</div>
		</div>
		<!-- End Section Title -->


		<div class="carousel-outer">

			<div class="row">
				<div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
					<div class="testimonials-style owl-carousel owl-theme">

                        <?php foreach ($about_section as $aboutsection){ ?>
						<div class="testimonial">
							<span class="icon fa fa-quote-left"></span>
							<p class="description blfo">
                                <?php echo strip_tags($aboutsection->introtext, '<a><br><div><style><strong>'); ?>
                            </p>

							<div class="testimonial-content">
								<div class="pic02"><img src="<?php echo JURI::base().json_decode($aboutsection->images)->image_intro; ?>" alt="Applora"></div>
								<h3 class="title blfo"><?php echo $aboutsection->title; ?></h3>
								<span class="post blfo"><?php echo json_decode($aboutsection->images)->image_intro_caption; ?></span>
							</div>
						</div>
                        <?php } ?>


					</div>
					<!-- End testimonials-style [Slider] -->
				</div>
				<!-- End col-md-12 -->
			</div>
			<!-- End row -->

		</div>
		<!-- End carousel-outer -->
	</div>
	<!-- End Container -->
</section>
<!-- End testimonials -->

