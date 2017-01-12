<?php //Template Name:Full-Width-Timeline Page
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">	
		<?php wp_nav_menu( array(
			'theme_location' => 'secondary',
			'menu_class' => 'nav cl-effect-6',
			'fallback_cb' => 'kadima_fallback_page_menu',
			'walker' => new kadima_nav_walker(),
			)
		);	?>		
		<?php get_template_part('post','page'); ?>	
		</div>		
	</div>
</div>	
<?php get_footer(); ?>