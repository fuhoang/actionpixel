<div class="container main">
  <div class="image-container">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TAP10_BANNER.jpg" class="img-responsive">
    <div class="header-info">
      <h1>TAP 10</h1>
      <span class="subtitle">We love making Top Ten lists. And they countdown old school-style, like the timer on a dirty Soviet
      bomb. Comics + Animation + Gaming #TAP10</span>
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
