<?php
/**
 * Footer skeleton for Elementor-compatible theme integration
 * Copy the markup into your theme's footer.php (or include as a template part)
 */
?>
</main><!-- #content -->
<footer id="site-footer" class="site-footer">
	<div class="footer-inner container">
		<div class="site-info">
			&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
		</div>
		<nav class="footer-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
		</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
