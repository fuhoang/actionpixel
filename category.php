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
	<div class = "panel panel-default panel-body">
			
    	<h1> <?php single_cat_title(); ?></h1>
  
		<div class="row">
        	<div class="col-md-8">
	        <?php
	        	if ( have_posts() ) :
					$categories = get_the_category();
					if($categories){
						foreach($categories as $category) {
							$cat_id = $category->cat_ID;
						}
					}
		 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
					$args = array(
						'cat' => $cat_id,
  						'paged' => $paged
					);

			   		$query = new WP_Query( $args );
				
            	while(have_posts()) : the_post(); 
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
           	<?php endwhile; 
           		wp_reset_query(); 
           		$big = 999999999; // need an unlikely integer
				echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
				) );
			endif; 
			?>	
         
			</div>		         
	       	<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
    	</div><!-- /.row -->
    </div>
</div>     
<?php get_footer(); ?>