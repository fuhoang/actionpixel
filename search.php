<?php get_header(); ?>

<div class = "container main-content">
	<div class="panel panel-default panel-body">
		<div class="row">
			<div class="col-md-4">
				<?php get_search_form( ); ?>
			</div>
			<div class="col-md-4">
				<ul class="social-icon">
					<li><a target="_blank" href="https://www.facebook.com/TheActionPixel"><img src="<?php bloginfo( 'template_url' ); ?>/images/fb_icon.jpg" /></a></li>
					<li><a target="_blank" href="https://www.twitter.com/theactionpixel"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter_icon.jpg" /></a></li>
					<!--<li><a href=""><img src="<?php bloginfo( 'template_url' ); ?>/images/youtube.png" /></a></li>-->
				</ul>
			</div>
			<div class="col-md-4">
			
			</div>			
		</div>
	</div>
	<header class="page-header">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
	</header><!-- .page-header -->
	<div class = "panel panel-default panel-body">
		<div class = "row">
			<div class = "col-md-8">	
				
				<?php
					if ( have_posts() ) : 
					// Start the Loop.
					while ( have_posts() ) : the_post();
				?>
				<div class="container home-blog">	
	            	<div class="thumbnail home-blog-thumbnail">
	            		<a href="<?php the_permalink(); ?>">
	            			<?php the_post_thumbnail( 'front-blog-feature', array( 'class' => 'img-thumbnail' ) );?>
	 					</a>
	 				</div>
	 				<div class="caption">	
	            		<h3><a href = "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
	            		<p class = "text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
	                	<p><?php the_excerpt(); ?></p>
	           		</div>
           		</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
			<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		</div>	
	</div>	
</div>
<?php
get_footer();
