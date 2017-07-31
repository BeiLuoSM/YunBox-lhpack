<?php get_header(); ?>
<div class="about-child-banner">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/news-bg.png" class="img-responsive">
</div>
<div class="container">
	<div class="row kadima_blog_wrapper single-news">
		<div class="col-md-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('post','content');
			get_template_part('author','intro');
			endwhile;
			else :
			get_template_part('nocontent');
			endif;
			kadima_navigation_posts();
			comments_template( '', true ); ?>
		</div>
	<!-- <?php get_sidebar(); ?>	 -->
	</div> <!-- row div end here -->
</div><!-- container div end here -->
<?php get_footer(); ?>