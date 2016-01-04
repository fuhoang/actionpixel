<div class="container main">
  <div class="image-container">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/THEARTISTPANEL_BANNER.jpg" class="img-responsive">
    <div class="header-info">
      <h1>The Artist Panel</h1>
      <span class="subtitle">Behind every pixel, there’s a creator. Meet a few of them here. Interviews + Q & A’s with flair
      TheArtistPanel</span>
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
