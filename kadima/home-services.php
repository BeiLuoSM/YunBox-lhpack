<!-- service section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
<?php if($wl_theme_options['home_service_heading'] !='') { ?>
<div class="container" >
	<div class="row">
		<div class="col-sm-12">
			<div class="kadima_heading_title">
				<h3><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h3>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container" >
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="kadima_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_icons_'.$i] !='') { ?><div class="kadima_service_iocn pull-left"><i class="<?php echo esc_attr($wl_theme_options['service_icons_'.$i]); ?>"></i></div><?php } ?>
					<div class="kadima_service_detail media-body">
						<?php if($wl_theme_options['service_title_'.$i] !='') { ?><h3><a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['service_title_'.$i]); ?></a></h3><?php } ?>
						<?php if($wl_theme_options['service_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_text_'.$i], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="video container">
    <img src="http://www.lhpack.com/wp-content/themes/kadima/images/ab-A.gif" class="hidden-sm hidden-xs">
    <h2 class="  ">About Us</h2>
    <div class="row">
        <div class="col-sm-6 video-left">
            <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="550px" height="337px" poster="http://www.lhpack.com/wp-content/themes/kadima/images/videopost.png"
                   data-setup="{}">
                <source src="http://cdn.yunclever.com/video/client_name/o/0615%E9%99%B5%E6%B5%B7%E8%A7%86%E9%A2%91%EF%BC%88%E7%BB%88%EF%BC%89.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-sm-6 video-right">
            <h2><?php echo esc_attr($wl_theme_options['custom_title_2_1']); ?></h2>
            <p><?php echo esc_attr($wl_theme_options['custom_text_2_1']); ?></p>
            <a href="http://www.lhpack.com/about-us/">READ MORE</a>
        </div>
    </div>
</div>

<div class="seamless container-fulid">
    <h2>Seamless OEM Process</h2>
    <img src="http://www.lhpack.com/wp-content/themes/kadima/images/seamless1.png" class="img-responsive">
    <img src="http://www.lhpack.com/wp-content/themes/kadima/images/seamless2.png" class="img-responsive">
</div>

<div class="swiper-container">
    <span></span>
    <div class="swiper-wrapper">
        <?php for($i=1; $i<=3; $i++ ) { ?>
        <div class="swiper-slide"><img src="<?php echo esc_attr($wl_theme_options['custom_img_1_'.$i]); ?>" class="img-responsive"></div>
        <?php } ?>
    </div>
    <div class="swiper-pagination swiper-pagination-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>

<div class="product">
    <div class="container">
        <img src="http://www.lhpack.com/wp-content/themes/kadima/images/p.png" class="hidden-sm hidden-xs">
        <h2>Products</h2>
        <div class=row>
            <?php for($i=1; $i<=4; $i++ ) { ?>
                <div class="col-md-3 col-sm-6 product-item ">
                    <h2><?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?></h2>
                    <div class="grid">
                        <figure class="effect-steve">
                            <img src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>" class="product-img">
                        </figure>
                    </div>
                    <a href="http://www.lhpack.com/shop/">VIEW MORE</a>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php for($i=5; $i<=8; $i++ ) { ?>
                <div class="col-md-3 col-sm-6 product-item ">
                    <h2><?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?></h2>
                    <div class="grid">
                        <figure class="effect-steve">
                            <img src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>" class="product-img">
                        </figure>
                    </div>
                    <a href="http://www.lhpack.com/shop/">VIEW MORE</a>
                </div>
            <?php } ?>
        </div>

    </div>
</div>





<!-- /Service section -->