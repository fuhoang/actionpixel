<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container main">
  <div class="image-container">
<?php
  $the_query = new WP_Query('posts_per_page=1');
  if ( $the_query->have_posts() ) :
?>
  <?php if ( is_home() ) : ?>
    <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('feature', array( 'class'  => "img-responsive")); ?>
    </a>
    <div class="header-info">
      <h1><a href=" <?php the_permalink();?>"><?php the_title(); ?></a></h1>
      <p><?php the_excerpt('...'); ?></p>
      <p><a class="btn btn-sm ap-btn" href="<?php the_permalink();?>" role="button">Read</a></p>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endwhile;?>
  <?php endif;?>
<?php endif;?>
  </div>
</div>

<div class="container main">
  <div class="row">
	  <?php
	  	$wp_query = new WP_Query(array('post_type' => 'post', 'category_name'=> 'animation,comics,gaming', 'offset'=>1));
		  if ( $wp_query->have_posts() ) :
				while($wp_query->have_posts()) : $wp_query->the_post();
					$cats = get_the_category(); 
		?>
    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail-img-container">
          <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) );?>
          </div>
        </a>
        	<div class="well">
        		<span><i class="fa fa-user"></i> <?php the_author(); ?></span>
        		<span><i class="fa fa-calendar"></i> <?php the_time('jS M,  Y'); ?></span>
        		<span><i class="fa fa-folder"></i> <?php echo $cats[0]->name ?> </span>
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
        endwhile;
			endif;
			wp_reset_postdata();  
    ?>
  </div><!-- End row -->
</div>
<?php get_footer(); ?>
