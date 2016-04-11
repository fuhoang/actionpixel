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
  <meta property="fb:app_id" content="623410471104207" />
  <meta property="fb:admins" content="100002010141906"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

  <!-- style css -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- google analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57054509-1', 'auto');
    ga('send', 'pageview');

  </script>
  <?php wp_head(); ?>
</head>

<body>

<!--facebook app -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=623410471104207";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<header class="masthead">
  <div class="container">
  <div class="row">

      <a class="brand" href="<?php echo site_url() ?>"><img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="the action pixel"></a>

  </div>
  </div>
</header>

<nav id="nav" class="navbar navbar-default navbar-static">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
      </button>
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
    </div>
  </div>
</nav>

<div class="container main">

  <div class="row">

    <div class="col-sm-12 col-md-6">
      <div class="social-media">
        <ul class="list-inline center">
          <li><a href="https://www.facebook.com/TheActionPixel"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.twitter.com/theactionpixel"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.theactionpixel.tumblr.com"><i class="fa fa-tumblr"></i></a></li>
          <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
          <li><a href="http://youtube.com/"><i class="fa fa-youtube"></i> </a></li>
        </ul>
      </div>
    </div>

    <div class="col-sm-12 col-md-6">
      <div class="search-toggle">
        <form class="searchbox" action="<?php bloginfo('siteurl'); ?>" method="get" role="search">
          <input type="search" placeholder="Search......" name="s" id="s" class="searchbox-input" onkeyup="buttonUp();" required>
          <input type="submit" class="searchbox-submit" value="GO">
          <span class="searchbox-icon"><i class="fa fa-search"></i></span>
        </form>
      </div>
    </div>

  </div><!--end row-->
</div><!-- container-->
