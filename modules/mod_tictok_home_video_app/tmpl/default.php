


<section id="<?php echo $cat_alias->caalias;?>" style="background-image: url(<?php echo json_decode($about_section[0]->images)->image_intro ; ?>)" class="video-app text-center">
	<div class="container">
		<?php foreach($about_section as $videoitems){?>
		<!-- Start Link Video -->
		<a class="play-btn wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s" href=" <?php echo json_decode($videoitems->urls)->urla ; ?>" data-lity>
			<img src="<?php echo JURI::base(true)?>/images/sampledata/play_btn.png" alt="play-button">
		</a>
		<!-- End Link Video -->
		<!-- Start Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
					<h2><?php echo $videoitems->title ?></h2>
					<span class="title-underline wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
				</div>
			</div>
		</div>
		<!-- End Section Title -->
		<!-- Start Text Video -->
		<p class="wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
			<?php echo strip_tags($videoitems->introtext, '<a><br><div><style><strong>') ?>	<!-- End Text Video -->
		<?php } ?>
	</div>
	<!-- End container -->
</section>
<!-- End video-app -->