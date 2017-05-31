<!-- kadima Callout Section -->
<?php $theme_options = kadima_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="kadima_footer_widget_area" style="display:none">
	<div class="container">
		<div class="row">
			<?php
			if ( is_active_sidebar( 'footer-widget-area' ) ){
				dynamic_sidebar( 'footer-widget-area' );
			} else
			{
			$args = array(
				'before_widget' => '<div class="col-md-3 col-sm-6 kadima_footer_widget_column">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="kadima_footer_widget_title">',
				'after_title'   => '<div class="kadima-footer-separator"></div></div>'
			);
			the_widget('WP_Widget_Pages', null, $args);
			} ?>
		</div>
	</div>
</div>
		<div class="container" style="display:none">
            <div class="kadima_footer_area">
			<div class="col-md-12">
			<p class="kadima_footer_copyright_info wl_rtl" >
			<?php if($theme_options['footer_customizations']) { echo esc_attr($theme_options['footer_customizations']); }
			if($theme_options['info_copyright']) { echo "|" .esc_attr($theme_options['info_copyright']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($theme_options['info_fax']) { echo esc_url($theme_options['info_fax']); } ?>"><?php if($theme_options['info_tel']) { echo esc_attr($theme_options['info_tel']); } ?></a></p>
			<?php if($theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="kadima_footer_social_div">
				<ul class="social">
					<?php if($theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>
			</div>
		</div>
</div>
<!-- /Footer Widget Secton -->
</div>

<div class="footer">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/f-bg.gif" alt="">
    <div class="container footer-container">
        <h1 class="hidden-xs"><img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/ft-bg.gif" alt=""><?php if($theme_options['footer_customizations']) { echo esc_attr($theme_options['footer_customizations']); }?></h1>
        <h2>ADDRESS:</h2>
        <span class="footer-container-address"><?php if($theme_options['info_tel']) { echo esc_attr($theme_options['info_fax']); } ?></span><br>
        <span class="footer-container-num"><img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/phone2.png" alt=""><?php if($theme_options['info_tel']) { echo esc_attr($theme_options['info_tel']); } ?></span>
        <ul>
            <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($theme_options['fb_link']); ?> " ><i class="fa fa-facebook"></i></a></li>
            <li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
            <li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <br>
        <p><?php echo esc_attr($theme_options['info_copyright']); ?></p>
    </div>
</div>

<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($theme_options['custom_css']); } ?>
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
