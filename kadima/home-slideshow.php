<div id="myCarousel" class="carousel slide" ">
    <div class="carousel-inner">
    <?php
        $theme_options = kadima_get_options();
        $j=1;
		for($i=1; $i<=3; $i++) {
            if($theme_options['slide_image_'.$i]!='') {
    ?>
                <div class="item <?php if($j==1) echo "active"; ?>">
                    <img src="http://localhost/wrd-lh/wp-content/themes/lh/images/banner-fly.gif" alt="" class="animated flyin slideInLeft" >
                    <img src="<?php echo esc_url($theme_options['slide_image_1']); ?>" class="img-responsive hidden-md hidden-sm hidden-xs" alt="<?php echo esc_attr($theme_options['slide_title_1']); ?>" />
                    <img src="<?php echo esc_url($theme_options['slide_image_2']); ?>" class="img-responsive hidden-lg" alt="<?php echo esc_attr($theme_options['slide_title_2']); ?>" />
                        <div class="container">
                            <div class="carousel-caption">
                            <?php if($theme_options['slide_title_'.$i]!='') {  ?>
                                <div class="carousel-text">
                                    <h1 class="animated bounceInRight">
                                        <?php echo esc_attr($theme_options['slide_title_'.$i]); ?>
                                    </h1>
                                <?php if($theme_options['slide_desc_'.$i]!='') {  ?>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft"><?php echo esc_attr($theme_options['slide_desc_'.$i]); ?></li>
                                    </ul>
                                <?php }
                                    if($theme_options['slide_btn_text_'.$i]!='') { ?>
                                        <a class="kadima_blog_read_btn animated bounceInUp" href="<?php if($theme_options['slide_btn_link_'.$i]!='') { echo esc_url($theme_options['slide_btn_link_'.$i]); } ?>" role="button"><?php echo esc_attr($theme_options['slide_btn_text_'.$i]); ?></a>
                                <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
    <?php $j++; }  } ?>
    </div>
    <ol class="carousel-indicators">
    <?php for($i=0; $i<$j-1; $i++) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
    <?php } ?>
	</ol>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
