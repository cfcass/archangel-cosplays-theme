<?php
/**
 * Header skeleton for Elementor-compatible theme integration
 * Copy the markup into your theme's header.php (or include as a template part)
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="site-header" class="site-header">
	<div class="header-inner container">
		<div class="site-branding">
			<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
				the_custom_logo();
			else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'container'      => false,
			) );
			?>
		</nav>
	</div>
</header>
<main id="content" class="site-content">
