<!-- kadima Callout Section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="kadima_footer_widget_area footer">
    <img src="http://www.lhpack.com/wp-content/themes/kadima/images/f-bg.gif" alt="">
	<div class="container footer-container">
		<?php
		if ( is_active_sidebar( 'footer-widget-area' ) ){
			dynamic_sidebar( 'footer-widget-area' );
		} else
		{
		$args = array(
			'before_widget' => '<div class="col-sm-12 kadima_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="kadima_footer_widget_title">',
			'after_title'   => '<div class="kadima-footer-separator"></div></div>'
		);
		the_widget('WP_Widget_Pages', null, $args);
		} ?>
	</div>
</div>
<!-- /Footer Widget Secton -->

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
