<?php get_header(); ?>
<div class="container">
	<header class="category-header">
		<h1> <?php the_title(); ?></h1>
	</header>
</div>

<div class="container main">
  <div class = "row">
    <div class="col-md-8 col-md-offset-2">
      <div class="page-wrapper">
        <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; wp_reset_query();?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
