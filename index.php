<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container main">
  <div class="image-container hover01">
<?php
  global $offset_id;
  $the_query = new WP_Query('posts_per_page=1');
  if ( $the_query->have_posts() ) :
    $offset_id = get_the_ID();
?>
  <?php if ( is_home() ) : ?>
    <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>">
      <figure>
      <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
      </figure>
    </a>
    <div class="header-info">
      <h1><a href=" <?php the_permalink();?>"><?php the_title(); ?></a></h1>
      <span class="subtitle"><?php the_subtitle(); ?></span>
      <p><a class="btn btn-sm ap-btn" href="<?php the_permalink();?>" role="button">Read</a></p>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endwhile;?>
  <?php endif;?>
<?php endif;?>
  </div>
</div>

<div class="container-fluid video">
  <div class="container inner-video">

    <h2>Video</h2>
    <div class="row">

      <div class="col-md-6">
        <a class="image-link" href="#">
        <img class="item-image" src="<?php bloginfo('template_directory'); ?>/images/PixelPlays_BANNER.jpg">
        <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">


        </a>
        <h4>This is the title for the this thumbnail</h4>
        <span>This is a small description</span>
      </div>

      <div class="col-md-6">

        <div class="row inner-video-4">
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="#">

              <img class="item-image" src="<?php bloginfo('template_directory'); ?>/images/THEARTISTPANEL_BANNER.jpg">
              <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">
            </a>
            <h4>This is the title for the this thumbnail</h4>
          </div>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="#">
              <img class="item-image" src="<?php bloginfo('template_directory'); ?>/images/DANGUY_BANNER.jpg">
              <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">

            </a>
            <h4>This is the title for the this thumbnail</h4>

          </div>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="#">
              <img class="item-image" src="<?php bloginfo('template_directory'); ?>/images/TAP10_BANNER.jpg">
              <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">

            </a>
            <h4>This is the title for the this thumbnail</h4>

          </div>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="#">
              <img class="item-image" src="<?php bloginfo('template_directory'); ?>/images/TAP10_BANNER.jpg">
              <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">
            </a>
            <h4>This is the title for the this thumbnail</h4>

          </div>
        </div>

      </div>
    </div><!-- end row-->

  </div>
</div>

<div class="container-fluid features">
  <div class="container inner-features">
    <h2>Feature</h2>
    <div class="row">

      <div class="col-md-6">

        <div class="row inner-features-4">
          <div class="col-xs-6 col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/images/DANGUY_BANNER.jpg">
            <h4>This is the title for the this thumbnail</h4>
          </div>
          <div class="col-xs-6 col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/images/DANGUY_BANNER.jpg">
            <h4>This is the title for the this thumbnail</h4>

          </div>
          <div class="col-xs-6 col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/images/TAP10_BANNER.jpg">
            <h4>This is the title for the this thumbnail</h4>

          </div>
          <div class="col-xs-6 col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/images/DANGUY_BANNER.jpg">
            <h4>This is the title for the this thumbnail</h4>

          </div>
        </div>

      </div>
      <div class="col-md-6">
        <img src="<?php bloginfo('template_directory'); ?>/images/TAP10_BANNER.jpg">
        <h4>This is the title for the this thumbnail</h4>
        <span>This is a small description</span>
      </div>
    </div><!-- end row-->
  </div>
</div>



<div class="container main">

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="leaderboard">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- top leader responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2424508156013330"
             data-ad-slot="4266870471"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>

    </div>
  </div>





  <div class="row">
<?php
  if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => array('post'), 'post__not_in'=>array($offset_id), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 12, 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    $i=0;
    while ($wp_query->have_posts()) : $wp_query->the_post();
?>
    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail-img-container hover01">
            <figure>
              <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) );?>
            </figure>
          </div>
        </a>
        	<div class="well">

        		<i class="fa fa-user"> <?php the_author(); ?></i>
        		<i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
        		<i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        	</div>
          <div class="caption">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt('...'); ?>
            <p><a href="<?php the_permalink(); ?>" class="btn btn-xs ap-btn" role="button">Read</a></p>
          </div>
      </div>
    </div>
    <?php
			$i++;
    			if ($i%3 == 0) echo '</div><div class="row">';
        endwhile;?>
  </div><!-- End row -->
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="leaderboard">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bottom leaderboard -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2424508156013330"
             data-ad-slot="2290609674"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <?php
        paginate();
        $wp_query = null;
        $wp_query = $temp; // Reset
      ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>
