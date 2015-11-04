<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container-fluid">
<div class="image-container">
  <a href="">
    <img src="<?php bloginfo('template_directory'); ?>/images/capATrench.jpg">
  </a>
</div>
  <div class="container header-info">
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>

</div>

<div class = "container main-content">
	<div class = "panel panel-default panel-body">
		<div id="" class = "row">
			<div id="content" class = "col-md-8">
            	<?php

				add_filter('post_limits', 'my_post_limit');
            	global $myOffset;
				$myOffset = 3;
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('offset='.$myOffset.'&showposts=10'.'&paged='.$paged);
            	while ($wp_query->have_posts()) : $wp_query->the_post();
            	$cats = get_the_category();
            	?>
            	<div class="container home-blog">
	            	<div class="thumbnail home-blog-thumbnail">
	            	<a class="catBtn" href="<?php the_permalink(); ?>"><?php echo $cats[0]->name;?></a>
	            		<a href="<?php the_permalink(); ?>">
	            			<?php the_post_thumbnail( 'front-blog-feature', array( 'class' => 'img-thumbnail' ) );?>
	 					</a>
	 				</div>
	 				<div class="caption">
	            		<h3><a href = "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
						<p class = "texted-muted">Posted by <span class="author"><?php the_author(); ?></span> on <span class="posted_date"><?php the_time('F jS, Y'); ?></span></p>
	                	<p><?php the_excerpt('...'); ?></p>
	           		</div>
           		</div>
           		<?php endwhile; ?>

           		<div class="navigation">
           		<?php

           			$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
				?>
				</div>
				<?php
				$wp_query = null; $wp_query = $temp;
				remove_filter('post_limits', 'my_post_limit');
				?>

            </div>

			<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
