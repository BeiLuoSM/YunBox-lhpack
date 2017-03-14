<!--<div class="kadima_blog_area">
<?php $wl_theme_options = kadima_get_options();?>
	<div class="specialty">
		<div class="container">
			<div class="col-md-6" style="padding-top:40px;padding-bottom:20px;">				
				<div id="newsCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<?php
						$j=1;
						for($i=1; $i<=3; $i++){
							if($wl_theme_options['custom_img_2_'.$i]!='') {
						?>
							<div class="item <?php if($j==1) echo "active"; ?>">
								<img src="<?php echo esc_url($wl_theme_options['custom_img_2_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['custom_title_2_'.$i]); ?>">
								<div class="container">
									<div class="carousel-caption">
									<?php if($wl_theme_options['custom_title_2_'.$i]!='') {  ?>
										<div class="carousel-text">
											<h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['custom_title_2_'.$i]); ?></h1>
										<?php
											if($wl_theme_options['custom_desciption_2_'.$i]!='') {  ?>
										  <ul class="list-unstyled carousel-list">
											<li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['custom_desciption_2_'.$i]); ?></li>
											</ul>
										 <?php }?>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
					<?php $j++; }  } ?>
					</div>
					<ol class="carousel-indicators">
						<?php for($i=0; $i<$j-1; $i++) { ?>
						<li data-target="#newsCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
						<?php } ?>
					</ol>
					<a class="left carousel-control" href="#newsCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#newsCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
			<div class="col-md-6" style="padding-top:40px;padding-bottom:20px;">
				<div id="kadima_blog_section">
					<ul>
					<?php
						if ( have_posts()) : 		
							$args = array( 'post_type' => 'post','posts_per_page' => 10 ,'ignore_sticky_posts' => 1);		
							$post_type_data = new WP_Query( $args );
							while($post_type_data->have_posts()):
								$post_type_data->the_post();
					?>
						<li>
							<div class="row">
								<div class="col-md-8">
									<i class="lnr"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="col-md-4">
									<i class="fa fa-clock-o"></i>
									<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
									<?php echo get_the_date('F d ,Y'); ?>
									<?php else : ?>
									<?php echo get_the_date(); ?>
									<?php endif; ?>
								</div>
							</div>
						</li>
					<?php
						endwhile; 
					endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</div>-->