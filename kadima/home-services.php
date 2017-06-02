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

<!--<div class="banner">-->
<!--    <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/banner.gif" class="img-responsive" alt="Responsive image">-->
<!--</div>-->
<div class="container about-us">
    <h2>About Us</h2>
    <div class="row about-us-title">
<!--        <div class="col-sm-4">-->
<!--            <div class="about-us-container">-->
<!--                <i><img src="http://localhost/wrd-lh/wp-content/themes/lh/images/ab1.gif" alt=""></i>-->
<!--                <div class="under-title">Overview</div>-->
<!--                <p>Founded in 1992, Shantou Linghai Plastic Packing Factory Co., Ltd. has over 20 years experience in the industry of plastic packaging. Our company produces packaging items used in food service, fresh produce industry, bakeries and delicatessens, and many other industries.-->
<!--                    Linghai Plastic Packing owns a dust-free workshop covering an area of 35,000 </p>-->
<!--                <a href="#">READ MORE</a>-->
<!--            </div>-->
<!--        </div>-->

        <!--            <div class=" col-md-4 ">-->
        <!--                <div class="kadima_service_area appear-animation bounceIn appear-animation-visible">-->
        <!--                    --><?php //if($wl_theme_options['service_icons_'.$i] !='') { ?><!--<div class="kadima_service_iocn pull-left">-->
        <!--                        <i class="--><?php //echo esc_attr($wl_theme_options['service_icons_'.$i]); ?><!--"></i></div>--><?php //} ?>
        <!--                    <div class="kadima_service_detail media-body">-->
        <!--                        --><?php //if($wl_theme_options['service_title_'.$i] !='') { ?><!--<h3><a href="--><?php //echo esc_url($wl_theme_options['service_link_'.$i]); ?><!--">-->
        <!--                                --><?php //echo esc_attr($wl_theme_options['service_title_'.$i]); ?><!--</a></h3>--><?php //} ?>
        <!--                        --><?php //if($wl_theme_options['service_text_'.$i] !='') { ?><!--<p>-->
        <!--                            --><?php //echo apply_filters('the_content', $wl_theme_options['service_text_'.$i], true); ?><!--</p>--><?php //} ?>
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <?php for($i=1; $i<=3; $i++ ) { ?>
            <div class="col-sm-4">
                <div class="about-us-container">
                    <i><img src=" <?php echo esc_attr($wl_theme_options['custom_img_1_'.$i]); ?>"></i>
                    <div class="under-title"><?php echo esc_attr($wl_theme_options['custom_title_1_'.$i]); ?></div>
                    <p><?php echo esc_attr($wl_theme_options['custom_text_1_'.$i]); ?></p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
        <?php } ?>
<!---->
<!--        <div class="col-sm-4">-->
<!--            <div class="about-us-container">-->
<!--                <i><img src="http://localhost/wrd-lh/wp-content/themes/lh/images/ab2.gif" alt=""></i>-->
<!--                <div class="under-title">Produce</div>-->
<!--                <p>The company's existing production workshop a total of 35,000 square meters, the main production equipment, including two sets of Germany KMD series of high-speed 4-station hot pressing machine, KTR5 cup machine, 30 sets of domestic automatic thermoforming production equipment. Molded products on the production of 60 tons, advanced automatic </p>-->
<!--                <a href="#">READ MORE</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <div class="about-us-container">-->
<!--                <i><img src="http://localhost/wrd-lh/wp-content/themes/lh/images/ab3.gif" alt=""></i>-->
<!--                <div class="under-title">Management</div>-->
<!--                <p>Company management science, passed the ISO9001, QS, the EU BRC and a series of quality management certification, since its inception in 1992, has been Bingzhe "quality first, credit first" purpose, promote unity and hard work, pioneering spirit of enterprise, Self-development, self-improvement, quality service to the rest of the world's business friends to visit our </p>-->
<!--                <a href="#">READ MORE</a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

<div class="advantage container-fluid request">
    <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/ad-bg3.png" alt="" class="advantage-bg hidden-md hidden-sm hidden-xs">
    <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/ad-bg2.png" alt="" class="advantage-bg hidden-lg hidden-xs">
    <div class="container advantage-container ">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <h2>Advantage</h2>
                <ul class="advantage-left">
                    <?php for($i=1; $i<=3; $i++ ) { ?>
                        <li><?php echo esc_attr($wl_theme_options['custom_title_2_'.$i]); ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <ul class="advantage-right">
<!--                    --><?php //for($i=1; $i<=3; $i++ ) { ?>
<!--                        <li><img src=" --><?php //echo esc_attr($wl_theme_options['custom_img_2_'.$i]); ?><!--"></li>-->
<!--                    --><?php //} ?>
                    <li class="advantage-right-active"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_1']); ?>"></li>
                    <li >
                        <a href="#" class="advantage-exterior advantage-exterior-left"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_2']); ?>" alt=""></a>
                        <a href="#" class="advantage-exterior advantage-exterior-right"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_3']); ?>" alt=""></a>
                    </li>
                    <li>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img class="advantage-mechanical-1" src="<?php echo esc_attr($wl_theme_options['custom_img_2_4']); ?>" alt=""></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_5']); ?>" alt=""></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_6']); ?>" alt=""></a>
                        <a href="#" class="col-xs-6 advantage-mechanical"><img src="<?php echo esc_attr($wl_theme_options['custom_img_2_7']); ?>" alt=""></a>
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
                <h2><?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?></h2>
                <img src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>">
                <a href="#">VIEW MORE</a>
            </div>

        <?php } ?>
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>PS Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/1.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>PET Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/2.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>PP Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/3.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>POPS Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/4.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>Patent Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/5.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>PVC Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/6.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>Injection Products</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/7.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
<!--        <div class="col-md-3 col-sm-6 product-item ">-->
<!--            <h2>Others</h2>-->
<!--            <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/8.gif" alt="">-->
<!--            <a href="#">VIEW MORE</a>-->
<!--        </div>-->
    </div>
    <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/downline.gif" alt="" class="product-down hidden-xs">
</div>

<div class="video container">
    <h2 class="hidden-lg hidden-sm hidden-md">About Us</h2>
    <div class="col-sm-6 video-left">
        <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="550px" height="337px" poster="http://localhost/wrd-lh/wp-content/themes/lh/images/video1.png"
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



<!-- /Service section -->