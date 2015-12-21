<div class="container main">
  <div class="image-container">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GNC_BANNER.jpg" class="img-responsive">
    <div class="header-info">
      <h1></h1>
      <span class="subtitle"></span>
    </div>
  </div>
</div>

<div class="container main">
  <!-- top leader google ads -->
  <?php
    get_template_part( 'category/category', 'ads-top-leaderboard');
  ?>

  <!-- category content -->
  <?php
    get_template_part( 'category/category', 'content');
  ?>
</div>
