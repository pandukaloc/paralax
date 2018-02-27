<section id="<?php echo $cat_alias->caalias;?>" class="download">
	<?php $x=0;$place=""; foreach ($about_section as $download ){  if($x==0){$place="firstoverlay";}?>
    <div class="overlay <?php echo $place;?>">
		<div class="container">
			<!-- Start Section Title -->

			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<h2><?php echo $download->title ?></h2>
						<span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
					</div>
				</div>
			</div>
			<!-- End Section Title -->
			<div class="download-content">
				<div class="text-download wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
					<p><?php echo $download->introtext ?></p>
				</div>
				<!-- Start Store Button -->
				<div class="store-butt">
					<a href="<?php echo json_decode($download->urls)->urla; ?>" target="_blank" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<i class="fa fa-apple"></i>
						<span>App Store</span>
					</a>
					<a href="<?php echo json_decode($download->urls)->urlb; ?>" target="_blank" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<i class="fa fa-android"></i>
						<span>Google Play</span>
					</a>
					<a href="<?php echo json_decode($download->urls)->urlc; ?>" target="_blank" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<i class="fa fa-windows"></i>
						<span>Windows Store</span>
					</a>
				</div>
				<!-- End Store Button -->
				<!-- Start Image Download -->
				<div class="image-download">
					<img src="<?php echo JURI::base().json_decode($download->images)->image_intro; ?>" alt="Download Image" class="img-responsive">
				</div>
				<!-- End Image Download -->
			</div>
			<!-- End download-content -->
		</div>
		<!-- End container -->
	</div>
<?php $place=""; $x++;} ?>	<!-- end overlay -->
</section>
<!-- End download -->