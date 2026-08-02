<?php
/**
 * Archangel Cosplays Theme
 * Template for displaying 404 error pages
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="main-content">
	<div class="container">
		<div class="error-404-content">
			<h1><?php esc_html_e( '404 - Page Not Found', 'archangel-cosplays' ); ?></h1>
			<p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'archangel-cosplays' ); ?></p>
			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
					<?php esc_html_e( 'Go to Home Page', 'archangel-cosplays' ); ?>
				</a>
			</p>
		</div>
	</div>
</main>

<?php
get_footer();
