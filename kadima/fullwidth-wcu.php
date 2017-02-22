<?php //Template Name:Full-Width-wcu Page
get_header(); 
get_template_part('breadcrums'); ?>
<style>
img{
	width:100%;
	margin-top:-70px;
}
</style>
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
<div><img  src="../wp-content/themes/kadima/images/wcu.jpg"></div>
<?php get_footer(); 





