<?php get_header();?>
<div>
	<img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/news-bg.png" class="img-responsive">
</div>
<div class="container">
	<div class="row kadima_blog_wrapper news">
	<div class="col-md-12">
		<?php
		if ( have_posts()):
		while ( have_posts() ): the_post();
		get_template_part('post','content'); ?>
		<?php endwhile;
		endif;
		kadima_navigation(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>