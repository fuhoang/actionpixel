<?php get_header(); ?>
<div class="container main">
	<?php if(have_posts()) : the_post(); ?>
  <div class="image-container">
  <?php the_post_thumbnail('feature', array( 'class'	=> "img-responsive")); ?>
 		<div class="blog-header">
      <h1 class="blog-title"><?php the_title(); ?></h1>
      <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      <div class="well">
       	<span><i class="fa fa-user"></i> <?php the_author(); ?></span>
        <span><i class="fa fa-calendar"></i> <?php the_time(' jS F, Y'); ?></span>
        <span><i class="fa fa-folder"></i> <?php $cat = get_the_category(); echo $cat[0]->name;?> </span>
      </div>
  	</div>
  </div>
	<div class="row">
	  <div class="col-md-8 col-sm-12 col-xs-12 blog-main">
	    <div class="blog-post">
	    	<?php the_content();?>
	    </div><!-- /.blog-post -->
	  </div>
	  <div class = "col-md-4 col-xs-12">
	  	<div class="sidebar-container">
		  	<h2>Recent Post</h2>
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
				<ul>
				<?php
				$rPosts = new WP_Query();
				$rPosts->query('showposts=3');
				while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
					<li>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('recent-thumbnails', array( 'class'  => "img-responsive")); ?></a>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
					</li>
				<?php endwhile;
				wp_reset_query();?>
				</ul>
			</div>
		</div>
	</div><!--end row-->
	<?php endif; ?>
</div><!--end container-->
<?php get_footer(); ?>
