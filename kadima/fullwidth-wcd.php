<?php //Template Name:Full-Width-wcd Page
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">	
		<?php wp_nav_menu( array(
			'theme_location' => 'third',
			'menu_class' => 'nav cl-effect-7',
			'fallback_cb' => 'kadima_fallback_page_menu',
			'walker' => new kadima_nav_walker(),
			)
		);	?>
		</div>		
	</div>
</div>	
<div><img src="../wp-content/themes/kadima/images/wcd.jpg" style="width:100%;"></div>
<?php get_footer(); 





