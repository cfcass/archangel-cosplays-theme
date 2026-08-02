<?php
/**
 * Archangel Cosplays Theme
 * Comments template
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) {
		?>
		<h2 class="comments-title">
			<?php
			$archangel_comment_count = get_comments_number();
			if ( '1' === $archangel_comment_count ) {
				echo esc_html__( 'One Comment', 'archangel-cosplays' );
			} else {
				echo esc_html(
					sprintf(
						/* translators: 1: number of comments */
						_n( '%1$s Comment', '%1$s Comments', $archangel_comment_count, 'archangel-cosplays' ),
						number_format_i18n( $archangel_comment_count )
					)
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => esc_html__( 'Older Comments', 'archangel-cosplays' ),
				'next_text' => esc_html__( 'Newer Comments', 'archangel-cosplays' ),
			)
		);
	}

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'archangel-cosplays' ); ?></p>
		<?php
	}

	comment_form();
	?>
</div>
