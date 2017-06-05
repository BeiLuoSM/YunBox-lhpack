<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $theme_options = kadima_get_options(); ?>
	<?php if($theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div>
	<!-- Header Section -->
	<div class="header_section" style="display: none" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="col-md-6 col-sm-12 wl_rtl" >
					<div class="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($theme_options['upload_image_logo']){ ?>
						<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
					<p><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>
				<?php if($theme_options['header_social_media_in_enabled']=='1') { ?>
				<div class="col-md-6 col-sm-12">
				<?php if($theme_options['email_id'] || $theme_options['phone_no'] !='') { ?>
				<ul class="head-contact-info">
						<?php if($theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $theme_options['email_id']; ?>"><?php echo esc_attr($theme_options['email_id']); ?></a></li><?php } ?>
						<?php if($theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone"></i><a href="tel:<?php echo $theme_options['phone_no']; ?>"><?php echo esc_attr($theme_options['phone_no']); ?></a></li><?php } ?>
				</ul>
				<?php } ?>
					<ul class="social">
					<?php if($theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a href="<?php echo esc_url($theme_options['twitter_link']); ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo esc_url($theme_options['linkedin_link']); ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="gplus"><a href="<?php echo esc_url($theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="instagram"><a href="<?php echo esc_url($theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
					</ul>
				</div>
				<?php } ?>
			</div>
			<!-- /Logo & Contact Info -->
		</div>
	</div>
	<!-- /Header Section -->
	<!-- Navigation  menus -->
	<div class="navigation_menu"  data-offset-top="95" id="kadima_nav_top" >
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
                    <a class="navbar-brand" href="#">
                        <img alt="logo" src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/h-logo.gif" class="img-responsive">
                    </a>
                    <a class="navbar-brand" href="#">
                        <h2>LINGHAI <br>PLASTIC</h2>
                    </a>
				</div>
				<div id="menu" class="collapse navbar-collapse ">
                     <div class="nav-phone">
                    <a href="#">Quote Now</a>
                    <span><img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/phone.gif" alt="">86-754-88676633</span>
                </div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'kadima_fallback_page_menu',
							'walker' => new kadima_nav_walker(),
							)
						);
					?>
					<div id="google_translate_element" ></div>
                    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/search.gif" alt="" class="hidden-xs search-img" >
                    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class=" hidden-xs">
                        <div class="input-group">
                            <input type="text" class="form-control"  name="s" id="s" placeholder="<?php _e( "What do you want to find?", 'kadima' ); ?>" />
                            <span class="input-group-btn">
                                <button class="btn btn-search" type="submit" ><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
				</div>
			</nav>
		</div>
	</div>


