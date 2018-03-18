
<section id="<?php echo $cat_alias->caalias;?>" class="faqs">
	<div class="container">
		<!-- Start Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					<h2>Frequently Asked Questions</h2>
					<span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
				</div>
			</div>
		</div>
		<!-- End Section Title -->
		<div class="row">
			<!-- Start Faqs Photo -->
			<div class="col-md-6 wow fadeInRight" data-wow-duration="1s">
				<div class="faqs-img">
					<img src="images/sampledata/faq.jpg" alt="Tekto FAQ" class="img-responsive">
				</div>
			</div>
			<!-- End Faqs Photo -->

			<!-- Start Faqs Content -->
			<div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-duration="1s">
				<div class="faq-content-wrapper">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

						<?php $x=0;  foreach ($about_section as $faqitems){  ?>
						<!-- Start Single Faq -->
						<div class="panel">
							<div class="panel-heading" role="tab" id="heading<?php echo $x; ?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x; ?>" aria-expanded="true" aria-controls="collapse<?php echo $x; ?>" class="<?php if($x!=0){echo "collapsed";} ?>">
                                        <?php echo $faqitems->title; ?>
                                    </a>
								</h4>
							</div>
							<div id="collapse<?php echo $x; ?>" class="panel-collapse collapse <?php if($x==0){echo "in";} ?>" role="tabpanel" aria-labelledby="heading<?php echo $x; ?>">
								<div class="panel-body">
									<?php echo $faqitems->introtext; ?>
								</div>
							</div>
						</div>
                        <?php $x++; } ?>
						<!-- End Single Faq -->


                    </div>
					<!-- end panel-group -->
				</div>
				<!-- end faq-content-wrapper -->
			</div>
			<!-- End Faqs Content -->

		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End faqs -->