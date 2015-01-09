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
				<div class="container error_404">
					<span>ERROR 404</span>
					<p>"Oops, I screwed up and you discovered my fatal flaw. 
						Well, we're not all perfect, but we try.  Can you try this
						again or maybe visit our <a title="Our Site" href="<?php echo site_url() ?>">Home Page</a> to start fresh.  We'll do better next time."</p>
				</div>
			</div>
			<div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
			</div>
		</div>
	</div>
</div>	
<?php get_footer(); ?>
