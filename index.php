<?php
/**
 * Archangel Cosplays Theme
 * Main index template file - fallback for all page types
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="main-content">
	<div class="container">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if ( 'page' !== get_post_type() ) { ?>
							<div class="entry-meta">
								<?php echo esc_html( get_the_date() ); ?>
							</div>
						<?php } ?>
					</header>

					<?php if ( has_post_thumbnail() ) { ?>
						<div class="featured-image">
							<?php the_post_thumbnail( 'full' ); ?>
						</div>
					<?php } ?>

					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Post title */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'archangel-cosplays' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'archangel-cosplays' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>

					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
				</article>
				<?php
			}
		} else {
			?>
			<div class="no-posts-found">
				<h2><?php esc_html_e( 'Nothing here', 'archangel-cosplays' ); ?></h2>
				<p><?php esc_html_e( 'Sorry, we could not find what you were looking for.', 'archangel-cosplays' ); ?></p>
				<?php get_search_form(); ?>
			</div>
			<?php
		}
		?>
	</div>
</main>

<?php
get_footer();
