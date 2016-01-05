<?php get_header(); ?>
<div class="container main">
<?php while ( have_posts() ) : the_post();?>
	<?php get_template_part( 'content', 'single' );?>
<?php endwhile; ?>
</div><!--end container-->
<?php get_footer(); ?>
