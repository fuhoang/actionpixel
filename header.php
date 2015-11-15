<?php
/**
 *The template for displaying the header
 *
 *@package Wordpress
 *@subpackage The Action Pixel
 *@since The Action Pixel 1.0
 */
?>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1420089641647212";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class = "navbar navbar-default navbar-static-top">
  <div class = "container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo site_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="the action pixel"></a>
    </div>
  <div id="navbar" class="navbar-collapse collapse">
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
    <form action="<?php bloginfo('siteurl'); ?>" method="get" class="navbar-form navbar-right" role="search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" id="s" name="s">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://www.facebook.com/TheActionPixel"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.twitter.com/theactionpixel"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.theactionpixel.tumblr.com"><i class="fa fa-tumblr"></i></a></li>
      <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
      <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i> </a></li>
    </ul>

    </div>
  </div>
</div>
