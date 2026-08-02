<?php
/**
 * Archangel Cosplays Theme
 * Footer template
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

?>
	<footer id="site-footer" class="site-footer">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<!-- Footer Widgets -->
					<div class="col col-third">
						<?php
						if ( is_active_sidebar( 'footer-area' ) ) {
							dynamic_sidebar( 'footer-area' );
						}
						?>
					</div>

					<!-- Social Links -->
					<div class="col col-third">
						<div class="footer-social">
							<h4><?php esc_html_e( 'Follow Us', 'archangel-cosplays' ); ?></h4>
							<ul class="social-links">
								<?php
								$social_links = array(
									'instagram' => 'https://instagram.com',
									'twitter'   => 'https://twitter.com',
									'facebook'  => 'https://facebook.com',
									'tiktok'    => 'https://tiktok.com',
								);
								foreach ( $social_links as $platform => $url ) {
									?>
									<li>
										<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr( ucfirst( $platform ) ); ?>">
											<?php echo esc_html( ucfirst( $platform ) ); ?>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
						</div>
					</div>

					<!-- Footer Info -->
					<div class="col col-third">
						<div class="footer-info">
							<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'archangel-cosplays' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
