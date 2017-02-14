<!-- service section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<section id="what-we-do" class="what-we-do ">
			<div class="container">
					<div class="row">
							<div class="col-md-12 col-md-offset-1" style="margin-left: 0;">
									<div class="row">
										<?php for($i=1; $i<=2; $i++ ) { ?>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>">
													<div class="do-box text-center">
															<?php if($wl_theme_options['service_img_'.$i] !='') { ?>
																<i class="lnr"><img src="<?php echo esc_url($wl_theme_options['service_img_'.$i]); ?>" style="height: 60px;"></i>
															<?php } ?>
															
															<?php if($wl_theme_options['service_title_'.$i] !='') { ?><h3><?php echo esc_attr($wl_theme_options['service_title_'.$i]); ?></h3><?php } ?>
															<?php if($wl_theme_options['service_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_text_'.$i], true); ?></p><?php } ?>
													</div>
													</a>
											</div>
										<?php }?>
									</div>
							</div>
					</div>
			</div>
	</section>
</div>
