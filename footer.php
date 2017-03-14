<?php $wl_theme_options = kadima_get_options(); ?>

<div class="kadima_footer_area" style="padding: 20px 0 20px;">
	<div class="container">
		<div class="col-md-12" style="border-bottom: 1px solid #fff;padding-bottom:30px;">
			<div class="col-md-6" style="padding-right:0;padding-left:0;">
				<div class="col-md-8" >
					<p style="margin-bottom: 0;">subscribe</p>
						<p>Be the first to know about our latest products</p>
							<textarea id="yourmessage" class="form-control" style="border: 1px solid #dcdcdc; height:34px;" rows="3" placeholder="Enter Youremail Address"></textarea>
							<p><button class="btn btn-default" type="button">Submif</button></p>
								<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
									<div class="kadima_footer_social_div" style="padding-top:10px;">
										<ul class="social">
											<?php if($wl_theme_options['fb_link']!='') { ?>
													 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
												<?php } if($wl_theme_options['twitter_link']!='') { ?>
													<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['linkedin_link']!='') { ?>
													<li class="twitter chrome" title="Linkedin"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['youtube_link']!='') { ?>
													<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['gplus']!='') { ?>
													<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
												<?php } if($wl_theme_options['instagram']!='') { ?>
													<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
												<?php } ?>
										</ul>
										<?php } ?>
									</div>
									
				</div>
				<div class="col-md-4" style="color: #fff;">
					<p style="padding-left:25px;">product</p>
						<ul>
							<li>Quality</li>
							<li>Technology</li>
							<li>Application</li>
							<li>Delivery</li>
						</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-5" style="color: #fff;padding-left:40px;">
					<p style="padding-left:25px;">Quick Link</p>
							<ul>
								<li>Home</li>
								<li>Products</li>
								<li>About Us</li>
								<li>Contact Us</li>
							</ul>
				</div>
				<div class="col-md-7" style="color: #fff;padding-left:40px;">
					<p style="padding-left:38px;">Call Us</p>
							<ul style="list-style-type: none;">
								<li>Tel:86-754-8868662</li>
								<li>Mobile Phone:13829662202</li>
								<li>Fax:86-754-88915444</li>
								<li>Address:Qi shan North industrial Area,chaoshan Rd,Shantou,China</li>
							</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>




		<!--<p class="kadima_footer_copyright_info" >
			<?php
				if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
				if($wl_theme_options['info_copyright']) { echo "|" .esc_attr($wl_theme_options['info_copyright']); } ?>
				<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['info_fax']) { echo esc_url($wl_theme_options['info_fax']); } ?>">
					<?php if($wl_theme_options['info_tel']) { echo esc_attr($wl_theme_options['info_tel']); } ?>
				</a>
			</p>-->
