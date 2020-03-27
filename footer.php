		<footer class="main-footer">
			<div class="container">
				<div class="f_left">
					<p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
				</div>
				
				<div class="f_right">
					<?php
						$args = array(
							'theme_location' => 'footer'
						);
					?>
					<?php wp_nav_menu($args); ?>
				</div>
			</div>
		</footer>
		
		<?php wp_footer(); ?>
	</body>
</html>