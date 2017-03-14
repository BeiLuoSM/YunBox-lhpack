<?php $wl_theme_options = kadima_get_options();?>
<div class="kadima_blog_area ">
	<div class="specialty">
		<div class="container">
			<div class="col-md-12 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['service_heading']); ?></h3>
				<div class="container">	
					<div class="row" id="kadima_blog_section">
						<div class="col-md-12">
							<div class="row">					
							<?php for($i=1; $i<=4; $i++ ) { ?>
								<div class="col-md-3 news-grid wow fadeInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible;">
									<img src="<?php echo esc_attr($wl_theme_options['service_img_'.$i]); ?>" alt="">
									<div class="news-info" style="text-align: center;">
										<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['service_text_'.$i]); ?><p></p></a>
									</div>
								</div>
							<?php } ?>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>