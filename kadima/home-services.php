<!-- service section -->
<?php $theme_options = kadima_get_options(); ?>
<div class="kadima_service">
<?php if($theme_options['home_service_heading'] !='') { ?>
<div class="container" >
	<div class="row">
		<div class="col-sm-12">
			<div class="kadima_heading_title">
				<h3><?php echo esc_attr($theme_options['home_service_heading']); ?></h3>
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
					<?php if($theme_options['service_icons_'.$i] !='') { ?><div class="kadima_service_iocn pull-left"><i class="<?php echo esc_attr($theme_options['service_icons_'.$i]); ?>"></i></div><?php } ?>
					<div class="kadima_service_detail media-body">
						<?php if($theme_options['service_title_'.$i] !='') { ?><h3><a href="<?php echo esc_url($theme_options['service_link_'.$i]); ?>"><?php echo esc_attr($theme_options['service_title_'.$i]); ?></a></h3><?php } ?>
						<?php if($theme_options['service_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $theme_options['service_text_'.$i], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="container about-us">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/ab-A.gif" alt="" class="about-us-A">
    <h2>About Us</h2>
    <div class="row about-us-title">
        <?php for($i=1; $i<=3; $i++ ) { ?>
            <div class="col-sm-4">
                <div class="about-us-container">
                    <i><img src=" <?php echo esc_attr($theme_options['custom_img_1_'.$i]); ?>"></i>
                    <div class="under-title"><?php echo esc_attr($theme_options['custom_title_1_'.$i]); ?></div>
                    <p><?php echo esc_attr($theme_options['custom_text_1_'.$i]); ?></p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="advantage container-fluid request">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/ad-bg3.png" alt="" class="advantage-bg hidden-md hidden-sm hidden-xs">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/ad-bg2.png" alt="" class="advantage-bg hidden-lg hidden-xs">
    <div class="container advantage-container ">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <h2>Advantage</h2>
                <ul class="advantage-left">
                    <?php for($i=1; $i<=3; $i++ ) { ?>
                        <li><?php echo esc_attr($theme_options['custom_title_2_'.$i]); ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <ul class="advantage-right">
                    <li class="advantage-right-active"><img src="<?php echo esc_attr($theme_options['custom_img_2_1']); ?>"></li>
                    <li >
                        <a href="#" class="advantage-exterior advantage-exterior-left"><img src="<?php echo esc_attr($theme_options['custom_img_2_2']); ?>" alt=""><span class="advantage-exterior-cover"></span></a>
                        <a href="#" class="advantage-exterior advantage-exterior-right"><img src="<?php echo esc_attr($theme_options['custom_img_2_3']); ?>" alt=""><span class="advantage-exterior-cover"></span></a>
                    </li>
                    <li>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img class="advantage-mechanical-1" src="<?php echo esc_attr($theme_options['custom_img_2_4']); ?>" alt=""><span></span></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($theme_options['custom_img_2_5']); ?>" alt=""><span></span></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($theme_options['custom_img_2_6']); ?>" alt=""><span></span></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($theme_options['custom_img_2_7']); ?>" alt=""><span></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product ">
    <div class="container">
        <h1>Products</h1>
        <?php for($i=1; $i<=8; $i++ ) { ?>
            <div class="col-md-3 col-sm-6 product-item ">
                <h2><?php echo esc_attr($theme_options['custom_title_3_'.$i]); ?></h2>
                <img src="<?php echo esc_attr($theme_options['custom_img_3_'.$i]); ?>">
                <a href="#">VIEW MORE</a>
            </div>

        <?php } ?>
    </div>
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/downline.gif" alt="" class="product-down hidden-xs">
</div>

<div class="video container">
    <h2 class="hidden-lg hidden-sm hidden-md">About Us</h2>
    <div class="col-sm-6 video-left">
        <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="550px" height="337px" poster="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/video1.png"
               data-setup="{}">
            <source src="http://localhost/wrd-lh/wp-content/themes/lh/images/meishi.mp4" type="video/mp4">
        </video>
<!--        <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/video.gif" alt="">-->
    </div>
    <div class="col-sm-6 video-right">
        <h2>shantou linghai plastic packing factory co.ltd</h2>
        <p>is a professional manufacturer for thermoformed plastic packaging. we’ve been customizing food grade plastic packaging for fast food chains, fresh produce industries, bakery and deli, as well as electronic industry and general merchandise markets. material option includes pet, pp, ps, bops, pvc, pla. our ability to meet complex requirements has made us coca-cola’s authorized manufacturer of their trademark plastic cups. </p>
        <a href="#">READ MORE</a>
    </div>
</div>
