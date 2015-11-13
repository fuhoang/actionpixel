<?php get_header(); ?>
<div class="container">
	<header class="category-header">
		<h1><?php printf( __( 'Search Results for: %s', 'actionpixel' ), get_search_query() ); ?></h1>
	</header>
</div>
<div class = "container main">
	<div class = "row">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
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
			endwhile;
			endif;
		?>
	</div>
</div>
<?php
get_footer();
