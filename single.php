<?php get_header(); ?>
<div class="container main">
<?php while ( have_posts() ) : the_post();?>
	<?php 
		if(get_post_format () != null){
			$format = get_post_format ();
		}else{
			$format = "single";

		}
		get_template_part( 'content', $format );
	?>
<?php endwhile; ?>
</div><!--end container-->
<?php get_footer(); ?>
