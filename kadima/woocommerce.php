<?php get_header(); ?>
<div>
	<img src="http://www.lhpack.com/wp-content/themes/kadima/images/child-product.png" class="img-responsive">
</div>
<div class="kadima_header_breadcrum_title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php global $wp;
				echo $current_url = (add_query_arg(array(),$wp->request)); ?></h1>
				<!-- BreadCrumb -->
                <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?>
                <!-- BreadCrumb -->
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row kadima_blog_wrapper products-list">
			<?php
				if ( !is_product() ) {
			?>
			<div class="col-md-3 hidden-sm hidden-xs">
				<h3>CATEGEROIES</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'PRDM',
						'menu_class' => 'nav navbar-nav-product container',
						'fallback_cb' => 'kadima_fallback_page_menu',
						'walker' => new kadima_nav_walker(),
						)
					);
				?>
			</div>
			<div class="col-md-9">
			<?php woocommerce_content(); ?>
			</div>
			<?php
				} else{
			?>
			<div class="col-md-12">
				<?php woocommerce_content(); ?>
			</div>
			<?php
				}
			?>


	<?php?>
	</div>
</div>

<?php
	if ( is_product() ) {
?>
<div class="child-pro-pic1 container">
	<img src="http://www.lhpack.com/wp-content/themes/kadima/images/child-pro-bottom2.png" alt="" class="img-responsive">
</div>
<?php
	}
?>
<?php get_footer(); ?>


