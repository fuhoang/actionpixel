<?php get_header(); ?>
<div class="container main">
  <div class="image-container">
  	<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/capATrench.jpg">
 		<div class="blog-header">
      <h1 class="blog-title">The Bootstrap Blog</h1>
      <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      <div class="well">
       	<span><i class="fa fa-user"></i> Dulani wilson</span>
        <span><i class="fa fa-calendar"></i> Nov 5, 2015 </span>
        <span><i class="fa fa-folder"></i> Comics </span>
      </div>
  	</div>
  </div>
	<div class="row">
	  <div class="col-sm-8 blog-main">
	    <div class="blog-post">
	     	<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
	      <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
	      <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
	      This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
	    </div><!-- /.blog-post -->
	  </div>
	  <div class = "col-md-4">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
		</div>
	</div>

<!--
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
-->
</div>
<?php get_footer(); ?>
