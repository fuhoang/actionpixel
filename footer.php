
<footer class="footer">
	<div class="container">
	  <div class="row">
			<div class = "col-md-3">
				<p class="footer_copyright">Action Pixel Copyright &copy; 2014</p>
			</div>
			<div class = "col-md-9">
				<div class = "navFooterCollapse">
				 		<?php
			       			 wp_nav_menu( array(
			            			'menu'              => 'footer_menu',
			            			'theme_location'    => 'footer_menu',
			            			'depth'             => 2,
			            			'menu_class'        => 'nav navbar-nav',
			            			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			            			'walker'            => new wp_bootstrap_navwalker())
			        			);
			    		?>
						</div>
					</div>
				</div>
	</div>
</footer>
<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script src = "<?php bloginfo('template_url') ; ?>/js/docs.min.js"></script>
<script src = "<?php bloginfo('template_url') ; ?>/js/actionpixel.js"></script>
<script>
</script>
<?php wp_footer(); ?>
</body>
</html>
