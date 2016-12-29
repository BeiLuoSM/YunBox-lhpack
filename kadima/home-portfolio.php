<!-- portfolio section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="content-grid">
		<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
		<p><hr></p>
		<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 20px;">
			<div class="container">
				<?php for($i=1 ; $i<=4; $i++) { ?>
					<div class="col-md-3 box_2" >
							<div style="box-shadow:0px 10px 17px rgba(51, 51, 51, 0.3);">
							<a class="mask" href="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>">
								<img class="img-responsive zoom-img" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?>">
							</a>
							<div class="most-1">
									<h5><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></a></h5>
									<h6><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></a></h6>
									<p><a href="<?php echo esc_url($wl_theme_options['port_link_'.$i]); ?>">READ MORE ></a></p>
							</div>
							</div>
					</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>

</div>
</div>