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
      <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
      <span class="subtitle"><?php the_subtitle(); ?></span>
      <p><a class="btn btn-sm ap-btn" href="<?php the_permalink();?>" role="button">Read</a></p>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endwhile;?>
  <?php endif;?>
<?php endif;?>
  </div>
</div>
<div class="container-fluid">
  <div class="container sub-header">
    <div class="row">
      <?php
        $the_query = new WP_Query(array('offset' => 1, 'posts_per_page' =>3));

        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
      <div class="col-md-4">
        <div class="sub-header-section">
          <div class="sub-image-container hover01">
            <a href="<?php the_permalink();?>">
            <figure>
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
            </figure>
            </a>
          </div>
          <span> <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2> </span>
          <div class="meta-info-header">
            <i class="fa fa-user"> <?php the_author(); ?></i>
            <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
            <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
          </div>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
    </div><!-- Row -->
  </div><!-- End container -->
</div><!-- End container fluid -->

<div class="container-fluid black-section">
  <div class="container">
    <div class="section-header">
      <h2>Animation</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'animation', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
              //print_r($category);
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link"  href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
              <!--<span class="category-thumb"><?php //echo $category[0]->cat_name; ?></span>-->

              <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
              <div class="thumb-meta">
                <i class="fa fa-user"> <?php the_author(); ?></i>
                <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
                <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
              </div>
            </a>
          </div>
          <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div>
      </div>
      <?php
        $the_query = new WP_Query(array('category_name' => 'animation', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
      <div class="col-md-6">
        <a class="image-link"  href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
          <!--<span class="category-thumb"><?php //echo $category[0]->cat_name; ?></span>-->
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
    </div><!-- end row-->
  </div><!-- End container -->
</div><!--End container fluid-->

<div class="container-fluid cream-section">
  <div class="container">
    <div class="section-header">
      <h2>Comics</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
      <?php
        $the_query = new WP_Query(array('category_name' => 'comics', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
        <a class="image-link" href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      <?php
          endwhile;
        endif;
      ?>
      </div>
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'comics', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
            </a>
            <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
            <div class="thumb-meta">
              <i class="fa fa-user"> <?php the_author(); ?></i>
              <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
              <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
            </div>
          </div>
          <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div><!-- end nested row inner-video-4-->
      </div>
    </div><!-- end row-->
  </div><!-- End of container-->
</div><!-- End of container fluid-->

<div class="container-fluid black-section">
  <div class="container">
    <div class="section-header">
      <h2>Gaming</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'gaming', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
              //print_r($category);
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link"  href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
              <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
              <div class="thumb-meta">
                <i class="fa fa-user"> <?php the_author(); ?></i>
                <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
                <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
              </div>
            </a>
          </div>
          <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div>
      </div>
      <?php
        $the_query = new WP_Query(array('category_name' => 'gaming', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
      <div class="col-md-6">
        <a class="image-link"  href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
    </div><!-- end row-->
  </div>
</div>

<div class="container-fluid cream-section">
  <div class="container">
    <div class="section-header">
      <h2>Reviews</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
      <?php
        $the_query = new WP_Query(array('category_name' => 'reviews', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
        <a class="image-link" href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      <?php
          endwhile;
        endif;
      ?>
      </div>
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'reviews', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
            </a>
            <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
            <div class="thumb-meta">
              <i class="fa fa-user"> <?php the_author(); ?></i>
              <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
              <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
            </div>
          </div>
          <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div><!-- end nested row inner-video-4-->
      </div>
    </div><!-- end row-->
  </div><!-- End of container -->
</div><!-- End of Container Fluid -->

<div class="container-fluid black-section">
  <div class="container">
    <div class="section-header">
      <h2>Features</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'features', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
              //print_r($category);
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link"  href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
              <!--<span class="category-thumb"><?php //echo $category[0]->cat_name; ?></span>-->
              <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
              <div class="thumb-meta">
                <i class="fa fa-user"> <?php the_author(); ?></i>
                <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
                <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
              </div>
            </a>
          </div>
          <?php
                $i++;
                if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div>
      </div>
      <?php
        $the_query = new WP_Query(array('category_name' => 'features', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
      <div class="col-md-6">
        <a class="image-link"  href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
          <!--<span class="category-thumb"><?php //echo $category[0]->cat_name; ?></span>-->
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
    </div><!-- end row-->
  </div>
</div>

<div class="container-fluid cream-section">
  <div class="container">
    <div class="section-header">
    <h2>Videos</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
      <?php
        $the_query = new WP_Query(array('category_name' => 'video', 'posts_per_page' =>1));
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $category = get_the_category();
      ?>
        <a class="image-link" href="<?php the_permalink();?>">
          <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
          <img class="overlay-icon img-responsive" src="<?php bloginfo('template_directory'); ?>/images/play.png">
        </a>
        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <div class="thumb-meta">
          <i class="fa fa-user"> <?php the_author(); ?></i>
          <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
          <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
        </div>
      <?php
          endwhile;
        endif;
      ?>
      </div>
      <div class="col-md-6">
        <div class="row inner-section-4">
          <?php
            $the_query = new WP_Query(array('category_name' => 'video', 'posts_per_page' =>4, 'offset' => 1));
            $i = 0;
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $category = get_the_category();
          ?>
          <div class="col-xs-6 col-md-6">
            <a class="image-link" href="<?php the_permalink();?>">
              <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive item-image")); ?>
              <img class="overlay-icon" src="<?php bloginfo('template_directory'); ?>/images/play.png">
            </a>
            <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
            <div class="thumb-meta">
              <i class="fa fa-user"> <?php the_author(); ?></i>
              <i class="fa fa-calendar"> <?php the_time('jS M,  Y'); ?></i>
              <i class="fa fa-folder"> <?php echo get_the_category_list(', '); ?> </i>
            </div>
          </div>
          <?php
          $i++;
          if ($i%2 == 0) echo '</div><div class="row inner-section-4">';
              endwhile;
            endif;
          ?>
        </div><!-- end nested row inner-video-4-->
      </div>
    </div><!-- end row-->
  </div><!-- end container -->
</div><!-- end container fluid -->

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
</div>
<?php get_footer(); ?>
