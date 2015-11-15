<?php get_header(); ?>
<div class="container main">
  <div class="image-container">

  <?php the_post_thumbnail('feature', array( 'class'	=> "img-responsive")); ?>
 	<div class="blog-header">
      <h1 class="blog-title"><?php the_title(); ?></h1>
      <span class="lead"><p><?php the_subtitle(); ?></span>
      <div class="blog-info">
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
	  <div class = "col-md-4 col-sm-12 col-xs-12">
	  	<div class="sidebar-container">
	  		<?php
	  			$post_id = get_the_ID();
				$tags = wp_get_post_tags($post_id);
				if ($tags) {
				$first_tag = $tags[0]->term_id;
				$args=array(
				'tag__in' => array($first_tag),
				'post__not_in' => array($post_id),
				'posts_per_page'=>5,
				'caller_get_posts'=>1
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				?>
				<h2>Related Posts</h2>
				<ul>
				<?php
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li>
						<span class="sidebar-img-container">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('recent-thumbnails', array( 'class'  => "img-responsive")); ?></a>
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						</span>
					</li>
				<?php
				endwhile;
				?>
				</ul>
				<?php
				}
				wp_reset_query();
				}
	  		?>

		  	<h2>Recent Post</h2>
				<ul>
				<?php
				$rPosts = new WP_Query();
				$rPosts->query('showposts=3');
				while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
					<li>
						<span class="sidebar-img-container">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('recent-thumbnails', array( 'class'  => "img-responsive")); ?></a>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
						</span>
					</li>
				<?php endwhile;
				wp_reset_query();?>
				</ul>
			</div>
		</div>
	</div><!--end row-->
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="fb-comments" data-width="100%"></div>

		</div>
	</div>

</div><!--end container-->
<?php get_footer(); ?>
