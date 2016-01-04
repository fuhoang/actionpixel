<div class="container main">
  <div class="image-container">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/PixelPlays_BANNER.jpg" class="img-responsive">
    <div class="header-info">
      <h1>Pixel Plays</h1>
      <span class="subtitle">Our original Let’s Play series takes on the world of gaming! Bring it, bro! On every Wednesday @
2pm GMT on TAP’s Youtube channel #PixelPlays</span>
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
