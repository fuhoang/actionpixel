<?php get_header(); ?>
<div class="container">
	<header class="category-header">
		<h1> <?php single_cat_title(); ?></h1>
	</header>
</div>

<?php
  $cat = get_query_var('cat');
  $yourcat = get_category ($cat);
  get_template_part( 'category/category', $yourcat->slug);
?>


<?php get_footer(); ?>
