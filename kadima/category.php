<?php get_header(); ?>
<div class="container">	
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
		<?php 
			if ( have_posts()):
				while ( have_posts() ): the_post();
					get_template_part('blog_masonry', 'loop');					
				endwhile; 
			endif; 
			kadima_navigation(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>