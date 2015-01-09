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
					<h1><?php the_title(); ?></h1>
					<span class="subtitle"><?php the_subtitle(); ?></span>
					<p class = "texted-muted">Posted by <span class="author"><?php the_author(); ?></span> on <span class="posted_date"><?php the_time('F jS, Y'); ?></span></p>
					<?php the_content(); ?>
					<?php endwhile; wp_reset_query();?>
				</div>
			</div>
			<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		</div>
	</div>
	
	<div class = "panel panel-default panel-body">
		<div class = "row">
			<div class = "col-md-8 comment-template">
				<?php comments_template();?>
			</div>
		</div>
	</div>
</div>	
<?php get_footer(); ?>
