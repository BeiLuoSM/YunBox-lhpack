<?php //Template Name:Full-Width-bj Page
get_header(); 
get_template_part('breadcrums'); ?>
<div style="background-color: #e7e7e7;">
<div class="container" style="background-color: #e7e7e7;">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">	
		<?php get_template_part('post','page'); ?>	
		</div>		
	</div>
</div>	
</div>
<?php get_footer(); ?>