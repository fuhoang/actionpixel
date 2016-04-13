
<footer class="footer">
	<div class="container">
		<div class="row">
		<?php
			if(is_active_sidebar('footer-widgets')){
				dynamic_sidebar('footer-widgets');
			}
		?>
		</div>
	</div>
	<div class="container">
		<div class="row">

			<p class="footer_copyright center-block">Action Pixel Copyright &copy; 2015</p>

		</div>
	</div>
</footer>

<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script src = "<?php bloginfo('template_url') ; ?>/js/docs.min.js"></script>
<script src = "<?php bloginfo('template_url') ; ?>/js/actionpixel.js"></script>

<?php wp_footer(); ?>
</body>
</html>
