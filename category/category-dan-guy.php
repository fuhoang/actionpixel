<div class="container main">
  <div class="image-container">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DANGUY_BANNER.jpg" class="img-responsive">
    <div class="header-info">
      <h1>Dan & Guy</h1>
      <span class="subtitle">(Web Series) Meet Dan and Guy. Interns extraordinaire. And if gossip, spoilers, Hentai porn and
drinking booze on the job are hireable qualities, they’re well on their way to full-time employment.
#DanAndGuy</span>
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
