		<div class = "footer">
			<div class="panel panel-default panel-body">
				<div class="row">
					<div class = "col-md-3">
						<span class="footer_copyright">Action Pixel Copyright &copy; 2014	</span>
						<!--<a href = "http://youtube.com/codersguide" class = "navbar-btn btn-danger btn pull-right">Subscribe on YouTube</a>-->
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
		</div>
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/crop.js"></script>
		<script src = "<?php bloginfo('template_url') ; ?>/js/docs.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
