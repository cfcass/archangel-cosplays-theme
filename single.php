<?php
/**
 * Archangel Cosplays Theme
 * Template for displaying single posts
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="main-content">
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-meta">
						<span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
						<span class="entry-author"><?php esc_html_e( 'by', 'archangel-cosplays' ); ?> <?php the_author(); ?></span>
					</div>
				</header>

				<?php if ( has_post_thumbnail() ) { ?>
					<div class="featured-image">
						<?php the_post_thumbnail( 'blog-featured' ); ?>
					</div>
				<?php } ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<footer class="entry-footer">
					<div class="entry-tags">
						<?php the_tags( '<span class="tag-label">' . esc_html__( 'Tags:', 'archangel-cosplays' ) . '</span> ', ', ', '' ); ?>
					</div>
				</footer>

				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
			</article>

			<?php
			// Post navigation
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Post', 'archangel-cosplays' ) . '</span><span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post', 'archangel-cosplays' ) . '</span><span class="nav-title">%title</span>',
				)
			);
		}
		?>
	</div>
</main>

<?php
get_footer();
