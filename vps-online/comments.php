<?php
	if ( post_password_required() ) {
	return;
}
?>
	<ul class="collapsible" data-collapsible="accordion">
		<li>
		<div class="collapsible-header"><i class="material-icons">comment</i><b>Click here to comment</b></div>
		<div class="collapsible-body">
			<p>
				<div id="comments" class=" comments-area">
				<div class="comments-wrap">
			<?php

			// You can start editing here -- including this comment!

			if ( have_comments() ) : ?>

			<h3 class="comments-title">

			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One comments on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'app-gracia' ) ),
						number_format_i18n( get_comments_number() ),
						'<span>' . get_the_title() . '</span>'
				);
			?>

			</h3>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h4 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'material-grace' ); ?></h4>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'material-grace' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'material-grace' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->

<?php endif; // Check for comment navigation. ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 50,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<p class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'material-grace' ); ?></p>
					<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'material-grace' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'material-grace' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->

	<?php
			endif; // Check for comment navigation.

				endif; // Check for have_comments().

// If comments are closed and there are comments, let's leave a little note, shall we?

			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'material-grace' ); ?></p>
			<?php
				endif;
				comment_form();
			?>
		</div>
	</div><!-- #comments -->
</p>
</div>
</li>
</ul>