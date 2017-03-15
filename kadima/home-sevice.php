<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
	<div class="content-grid2 specialty-info fadeInLeft animated">
		<h5 style="text-align:center;">
			<span style="padding:10px 35px;background-color: #019A44;color:#fff;">View Details</span>
		</h5>
	</div>
<?php if($wl_theme_options['custom_title_3'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12  animated" style="margin-top:70px;animation-delay: 0.4s; animation-name: fadeInRight;">
				<div class="kadima_heading_title">
					<h1 style="color:#009a44;"><?php echo esc_attr($wl_theme_options['custom_title_3']); ?></h1>
				</div>
				<h5 style="color: #fff;font-weight: 100;margin-bottom: 20px;padding:0 30px;font-size: 16px;text-align: center;">
					<span style="padding: 0 30px;color:#676767;"><?php echo $wl_theme_options['custom_desciption_3']; ?></span>
				</h5>
			</div>
		</div>
	</div>
<?php } ?>
	<section class="services wrapper services_line animated" id="services_three" style="background-color: #fff;animation-delay: 0.4s; animation-name: fadeInLeft;">
		<div class="container">
			<div class="row isotope" id="isotope-service-container">
				<div class="col-md-12" style="padding:5em 0;">
					<?php for($i=1; $i<5; $i++ ) { ?>
					<div class="col-xs-12 col-sm-2 service">
						<div style="overflow: hidden;" class="kadima_service_area appear-animation bounceIn appear-animation-visible">
							<?php if($wl_theme_options['custom_img_3_'.$i] !='') { ?>
								<div style="padding:5px;">
									<a href="<?php echo esc_url($wl_theme_options['custom_link_3_'.$i]); ?>">
										<img style="width:100%;" src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>">
									</a>
								</div>
							<?php } ?>							
								<div class="kadima_service_detail media-body">
								<?php if($wl_theme_options['custom_title_3_'.$i] !='') { ?>
									<h3>
										<a href="<?php echo esc_url($wl_theme_options['custom__link_3_'.$i]); ?>">
											<?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?>
										</a>
									</h3>
								<?php } ?>	
									<?php echo apply_filters('the_content', $wl_theme_options['custom_text_3_'.$i], true); ?>
								</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>