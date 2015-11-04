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
		<div class = "row">
			<div class = "col-md-8">
				<div class="container single-blog">
					<?php while(have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<?php endwhile; wp_reset_query();?>
				</div>
			</div>
			<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>
