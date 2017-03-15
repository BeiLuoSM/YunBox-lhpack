<?php $theme_options = kadima_get_options(); ?>
<div class="content-grid">		
	<div class="col-md-12 product-bj" style="padding-top: 20px;margin-bottom: 100px;background-color: #fff;">
		<div class="container">
			<h3 style="color: #fff;font-weight: 100;margin-bottom: 20px;padding:0 35px;font-size: 34px;text-align: center;">
				<span style="padding: 0 30px;color:#019A44;"><?php echo $theme_options['custom_title_1']; ?></span>
			</h3>
			<h5 style="color: #fff;font-weight: 100;margin-bottom: 20px;padding:0 30px;font-size: 16px;text-align: center;">
				<span style="padding: 0 30px;color:#676767;"><?php echo $theme_options['custom_desciption_1']; ?></span>
			</h5>
			<div class="col-md-12" style="background: #f2f2f2;padding-top: 10px;padding-bottom: 10px;padding-left:0;padding-right:0;padding-bottom:0;">
				<div class="col-md-6 specialty-info wow fadeInLeft animated animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
					<p class="p1" style="text-align:center;">
						<img style="width:100%;" src="//lhpack.site.yunclever.com/wp-content/themes/kadima/images/sp1.jpg">
						<!--img class=" zoom-img" src="<?php echo esc_url($theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['port_title_'.$i]); ?>"-->
					</p>
				</div>
				<div class="col-md-6 specialty-grids">
					<?php for($i=1 ; $i<=4; $i++) { ?>						
						<div class="col-md-6 service-box wow fadeInRight animated animated"  style="visibility: visible; animation-delay: 0.4s;padding:0; animation-name: fadeInRight;">
							<?php
							if($i==2 || $i==3){
							?>
								<figure class="icon icon2 color" style="background: #009a44 !important;padding-left:20px;padding-right: 20px;">
									<img src="<?php echo esc_url($theme_options['custom_img_1_'.$i]); ?>" alt="">
									<h5 style="font-size:25px;color:#fff"><?php echo esc_attr($theme_options['custom_text_1_'.$i]); ?></h5>
							<?php	
							}
							else {
							?>
								<figure class="icon icon2 color" style="background: #f2f2f2 !important;padding-left:20px;padding-right: 20px;">
									<img src="<?php echo esc_url($theme_options['custom_img_1_'.$i]); ?>" alt="">
									<h5><?php echo esc_attr($theme_options['custom_text_1_'.$i]); ?></h5>
							<?php
							}
							?>
							</figure>
						</div>
					<?php } ?>
				</div>
			</div>		
		</div>
	</div>
</div>
