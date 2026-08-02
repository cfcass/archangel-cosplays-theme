<?php
/**
 * Archangel Cosplays Theme
 * Header template
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main">
		<?php esc_html_e( 'Skip to content', 'archangel-cosplays' ); ?>
	</a>

	<header id="site-header" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="header-inner">
					<!-- Logo/Branding -->
					<div class="site-branding">
						<?php
						if ( has_custom_logo() ) {
							the_custom_logo();
						} else {
							?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
							<?php
						}
						$description = get_bloginfo( 'description' );
						if ( $description ) {
							?>
							<p class="site-description"><?php echo esc_html( $description ); ?></p>
							<?php
						}
						?>
					</div>

					<!-- Mobile Menu Toggle -->
					<button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle Menu', 'archangel-cosplays' ); ?>">
						<span></span>
						<span></span>
						<span></span>
					</button>

					<!-- Main Navigation -->
					<nav id="site-navigation" class="site-navigation primary-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'nav-menu',
								'fallback_cb'    => 'archangel_primary_menu_fallback',
							)
						);
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<?php
	/**
	 * Primary menu fallback
	 */
	function archangel_primary_menu_fallback() {
		?>
		<ul class="nav-menu">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'archangel-cosplays' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php esc_html_e( 'Portfolio', 'archangel-cosplays' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'archangel-cosplays' ); ?></a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'archangel-cosplays' ); ?></a></li>
		</ul>
		<?php
	}
	?>
