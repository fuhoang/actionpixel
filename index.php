<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      <?php	
		$first_query = new WP_Query(array('posts_per_page' => 1));
		while($first_query->have_posts()) : $first_query->the_post(); ?>
        <div class="item active">
        	<?php the_post_thumbnail('feature');?>
          	<div class="container">
            	<div class="carousel-caption">
					<h2><a href = "<?php the_permalink(); ?>"><span class="carousel-title"><?php the_title(); ?></span> </a></h2>
            	</div>
          	</div>
        </div>  
      <?php endwhile; wp_reset_query(); ?>
      <?php 
		$second_query = new WP_Query(array(
			  'posts_per_page' => 2, 
			  'offset' => 1 
			  )); 
		while ( $second_query->have_posts() ) : $second_query->the_post();?>
		<div class="item">	
				<?php the_post_thumbnail('feature');?>
          	<div class="container">
            	<div class="carousel-caption">
					<h2><a href = "<?php the_permalink(); ?>"><span class="carousel-title"><?php the_title(); ?></span> </a></h2>
            	</div>
          	</div>
		</div><!-- item -->
	<?php 
		endwhile; 
		wp_reset_postdata();
    ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


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
