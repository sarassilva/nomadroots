<?php wp_footer(); ?>

	<footer>
		<section class="footer">
			<div class="container">
				<?php if(is_active_sidebar('wdg1')){ dynamic_sidebar('wdg1'); } ?>
			</div>
		</section>
		<section class="partners">
			<div class="container">
				<?php if(is_active_sidebar('wdg2')){ dynamic_sidebar('wdg2'); } ?>
			</div>
		</section>
	</footer>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css" />
	<script  src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
</body>
</html>