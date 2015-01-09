<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php wp_title( '|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="the action pixel, action pixel, comics, animation, gaming, 3D, pixels, media, news, publishing, entertainment, entertainment on T.A.P " />
		<meta name="description" content="<?php if( is_single() ){
			while(have_posts()) : the_post();
          		$excerpt = strip_tags(get_the_excerpt('...'));
				echo $excerpt;
			endwhile; wp_reset_query();
		}else{
		 echo "The Action Pixel. A curation of original, innovative and informative content, giving insight into the animation, graphic novel and gaming cultures. We are Entertainment On T.A.P. #TheActionPixel #EntertainmentOnTAP"; 
		}
		?>"/>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>
	<div class = "header-container">
		<div class = "logo"><a href="<?php echo site_url() ?>"><span>Action Pixel</span></a></div>
	</div>	
	<div class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
			 <?php
       			 wp_nav_menu( array(
            			'menu'              => 'primary',
            			'theme_location'    => 'primary',
            			'depth'             => 2,
            			'menu_class'        => 'nav navbar-nav',
            			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            			'walker'            => new wp_bootstrap_navwalker())
        			);
    			?>
			</div>	
		</div>
	</div>