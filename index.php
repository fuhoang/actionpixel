<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container">
  <div class="image-container">
<?php
  $the_query = new WP_Query('posts_per_page=1');
  if ( $the_query->have_posts() ) :
?>
  <?php if ( is_home() ) : ?>
    <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <a href="">
      <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
    </a>
    <div class="header-info">
      <h1><a href=" <?php the_permalink();?>"><?php the_title(); ?></a></h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-sm ap-btn" href="#" role="button">Read</a></p>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endwhile;?>
  <?php endif;?>
<?php endif;?>
  </div>
</div>

<div class="container main">
  <div class="row">

    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <a href="#">
          <div class="thumbnail-img-container">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/capATrench.jpg">
          </div>
        </a>
        	<div class="well">
        		<span><i class="fa fa-user"></i> Dulani wilson</span>
        		<span><i class="fa fa-calendar"></i> Nov 5, 2015 </span>
        		<span><i class="fa fa-folder"></i> Comics </span>
        	</div>
          <div class="caption">
            <h3><a href="#">Thumbnail label</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
            <p><a href="#" class="btn btn-xs ap-btn" role="button">Read</a></p>
          </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img src="http://placehold.it/500x300" alt="">
        <div class="caption">
          <h4>Thumbnail label</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
          <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Read</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img src="http://placehold.it/500x300" alt="">
        <div class="caption">
          <h4>Thumbnail label</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
          <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
        </div>
      </div>
    </div>

  </div><!-- End row -->

  <div class="row">

    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/capATrench.jpg">
          <div class="caption">
            <h4>Thumbnail label</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
            <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
          </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img src="http://placehold.it/500x300" alt="">
        <div class="caption">
          <h4>Thumbnail label</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
          <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img src="http://placehold.it/500x300" alt="">
        <div class="caption">
          <h4>Thumbnail label</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
          <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
        </div>
      </div>
    </div>

  </div><!-- End row -->
</div>
<?php get_footer(); ?>
