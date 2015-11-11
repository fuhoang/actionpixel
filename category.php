<?php get_header(); ?>
<div class="container">
	<header class="category-header">
		<h1> <?php single_cat_title(); ?></h1>
	</header>
</div>
<div class="container main">
  <div class="row">
    <?php
      $categories = get_the_category();
      if($categories){
        foreach($categories as $category) {
          $cat_id = $category->cat_ID;
        }
      }   
      $wp_query = new WP_Query(array('cat' => $cat_id ));
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
