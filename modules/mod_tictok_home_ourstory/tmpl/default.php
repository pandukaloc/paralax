<section id="<?php echo $cat_alias->caalias;?>" class="our-story">
	<?php foreach ($about_section as $ourstoryitem){?>
	<div class="overlay">
		<div class="container">
			<div class="row">
				<!-- Start Photo Story -->
				<div class="col-md-6 col-md-push-6 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
					<div class="story-img">
						<img src="<?php echo JURI::base().json_decode( $ourstoryitem->images)->image_intro;  ?>" alt="<?php echo json_decode( $ourstoryitem->images)->image_intro_alt;  ?>" class="img-responsive">
					</div>
				</div>
				<!-- End Photo Story -->
				<!-- Start Text Story -->
				<div class="col-md-6 col-md-pull-6 wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
					<div class="story-text">
						<h3><?php echo $ourstoryitem->title;?></h3>
						<?php echo $ourstoryitem->introtext;?>
						<div class="story-butt">
							<a href="<?php $artpath=""; $artpath=json_decode( $ourstoryitem->urls)->urla; if(!empty($artpath)){echo $artpath;  }else{echo "#";} ?>" class="bttn-applora-gradient">
								<span>Read More</span>
							</a>
						</div>
					</div>
				</div>
				<!-- End Text Story -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</div>
	<!-- End overlay -->
	<?php } ?>
</section>
<!-- End our-story -->