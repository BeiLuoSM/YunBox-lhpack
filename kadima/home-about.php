<!-- about section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<section id="what-we-do" class="what-we-do " style="background-color: #fafafa;">
			<div class="container">
					<div class="row">
							<div class="col-md-12 col-md-offset-1" style="margin-left: 0;padding-top:4em;padding-bottom:4em;">
									<div class="row">
										<?php for($i=1; $i<=2; $i++ ) { ?>
											<?php if($i==1) { ?>
														<div class="col-md-6" style="border-right: 1px solid #d8d8d8;text-align: center;"></div<
													<?php } ?>
											<div class="col-md-6 col-sm-6 col-xs-12" style="pading-left:0;pading-right:0;">
													
													<div class="do-box text-center" >
															<div class="col-md-2" style="float:left;padding-top: 3em;">
																<?php if($wl_theme_options['about_slide_img_'.$i] !='') { ?>
																	<i class="lnr"><img src="<?php echo esc_url($wl_theme_options['about_slide_img_'.$i]); ?>" style="height: 70px;"></i>
																<?php } ?>
																
																
															</div>
															<div class="col-md-10" style="float:right;text-align: left;">
															<?php if($wl_theme_options['about_slide_title_'.$i] !='') { ?><h3 style="font-size: 2em;font-weight: bold;margin-top:0 !important;""><?php echo esc_attr($wl_theme_options['about_slide_title_'.$i]); ?></h3><?php } ?>
																<?php if($wl_theme_options['about_slide_description_'.$i] !='') { ?><p ><?php echo apply_filters('the_content', $wl_theme_options['about_slide_description_'.$i], true); ?></p><?php } ?>
																<a href="<?php echo esc_url($wl_theme_options['about_slide_btn_link_'.$i]); ?>">
																	<?php if($wl_theme_options['about_slide_btn_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['about_slide_btn_text_'.$i], true); ?></p><?php } ?>
																</a>
															</div>
													</div>
													
											</div>
										<?php }?>
									</div>
							</div>
					</div>
			</div>
	</section>
</div>
