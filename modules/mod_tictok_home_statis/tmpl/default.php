<section id="<?php echo $cat_alias->caalias;?>" class="statistic-app">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="all-statis text-center">
					<!-- Start Left Photo -->
					<div class="col-md-6 col-sm-6">
						<div class="statis-img">
							<img src="<?php echo JURI::base().json_decode( $about_section->images)->image_intro;  ?>" alt="<?php echo JURI::base().json_decode( $about_section->images)->image_intro_alt;  ?>" class="img-responsive wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">
							<img src="<?php echo   JURI::base().json_decode( $about_section->images)->image_fulltext;?>" alt="<?php echo JURI::base().json_decode( $about_section->images)->image_fulltext_alt;  ?>" class="img-responsive hidden-xs wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1s">
						</div>
					</div>
					<!-- End Left Photo -->
					<!-- Start Right Statis -->
					<div class="col-md-6 col-sm-6">
						<div class="statis-content">
							<div class="row">

								<?php echo $about_section->introtext;?>
							</div>
							<!-- End row -->

						</div>
						<!-- end statis-content -->
					</div>
					<!-- End Right Statis -->
				</div>
				<!-- End all-statis -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</div>
	<!-- End overlay -->
</section>
<!-- End statistic-app -->