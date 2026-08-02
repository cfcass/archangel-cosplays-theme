<?php
/**
 * Front-page skeleton to use as an Elementor landing page scaffold.
 * Create a WordPress Page called "Home", assign this template, then edit with Elementor.
 * Copy this file to your theme as front-page.php (or create a page template that returns the content).
 */
get_header();
?>
<div id="front-hero" class="front-hero">
	<div class="hero-inner container">
		<!-- Replace the background-image via Elementor or inline CSS -->
		<h1 class="hero-title">Welcome to Archangel Cosplays</h1>
		<p class="hero-sub">Cosplay portfolio, commissions, and event appearances</p>
		<a class="btn primary" href="/contact">Contact / Commissions</a>
	</div>
</div>

<section id="featured-gallery" class="featured-gallery container">
	<!-- Use Elementor to build a grid and link images to lightbox -->
	<div class="grid-skeleton">
		<!-- placeholder thumbnails -->
	</div>
</section>

<?php
get_footer();
