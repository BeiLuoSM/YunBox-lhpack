<!-- portfolio section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="content-grid">		
		<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 20px;background-color: #ececec;">
			<div class="container">
				<h3 style="text-align: center;font-size: 55px;color:#00a0e9;font-weight: 100;margin-bottom: 20px;"><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
				<?php for($i=1 ; $i<=1; $i++) { ?>
					<div class="col-md-12 box_2" >					
						<div>
							<div class="most-1">
								<!--<h5><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></a></h5>-->
								<h6 style="text-align:center;margin-bottom: 30px;font-size: 16px;padding:0 45px;"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></h6>
								<!--<p><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>">READ MORE ></a></p>-->
							</div>
							<?php for($i=1 ; $i<=2; $i++) { ?>
							<p style="text-align:center;">
							<a class="mask" href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>">
								<img class=" zoom-img" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>">
							</a>
							<?php } ?>
							</p>
						</div>
					</div>
					 <p class="p1" style="text-align:center;"><img src="../wp-content/themes/kadima/images/sp.jpg"></p>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
