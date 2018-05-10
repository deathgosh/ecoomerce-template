<?php get_header(); ?>
		<div class="row">
			<div class="col s12 m8">
						<?php

						while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-single', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.

						if ( comments_open() || get_comments_number() ) :

						comments_template();

						endif;

						endwhile; // End of the loop.
						?>
				</div><!-- #main -->

				<?php get_sidebar();?>
				
		</div><!-- #primary -->
<?php get_footer(); ?>
