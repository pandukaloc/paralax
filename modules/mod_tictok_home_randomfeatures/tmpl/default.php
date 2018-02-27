<section id="<?php echo $cat_alias->caalias;?>" class="feat-one">
	<div class="container">
<?php $number=2; foreach($about_section as $randomfeatures ){
	 if ($number % 2 == 0) {


	?>


		<!-- Start Single One -->
		<div class="row">
			<!-- Start Photo -->
			<div class="col-md-6 col-md-push-6 wow fadeInRight" data-wow-duration="1s">

                <div class="feat-one-img">
					<img src="<?php echo JURI::base().json_decode($randomfeatures->images)->image_intro;?>" alt="Applora" class="img-responsive">
				</div>
			</div>
			<!-- End Photo -->
			<!-- Start Text -->
			<div class="col-md-6 col-md-pull-6 wow fadeInLeft" data-wow-duration="1s">
				<div class="feat-one-text">
					<h2><?php echo $randomfeatures->title;?></h2>
					<p><?php echo $randomfeatures->introtext;?></p>
					<div class="feat-butt">
						<a href="#" class="bttn-applora-gradient">
							<span>Read More</span>
						</a>
					</div>
				</div>
			</div>
			<!-- End Text -->
		</div>



		<!-- end row -->
		<!-- End Single One -->
<?php }else{ ?>
		<!-- Start Single One -->
		 <div class="row">
			 <!-- Start Photo -->
			 <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
				 <div class="feat-two-img">
					 <img src="<?php echo JURI::base().json_decode($randomfeatures->images)->image_intro;?>" alt="Applora" class="img-responsive">
				 </div>
			 </div>
			 <!-- End Photo -->
			 <!-- Start Text -->
			 <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">
				 <div class="feat-two-text">
					 <h2><?php echo $randomfeatures->title;?></h2>
					 <p><?php echo $randomfeatures->introtext;?></p>
					 <div class="feat-butt">
						 <a href="#" class="bttn-applora-gradient">
							 <span>Read More</span>
						 </a>
					 </div>
				 </div>
			 </div>
			 <!-- End Text -->
		 </div>
		<!-- end row -->
		<!-- End Single One -->
<?php } ?>
        <!-- End Single One -->

	<!-- end container -->
	<?php $number++;} ?>
	</div>
</section>
<!-- End feat-one -->