<?php get_header(); ?>

	<header class="page-header center">

		<?php

		the_archive_title( '<h2 class="page-title">', '</h2>' );

		the_archive_description( '<div class="taxonomy-description">', '</div>' );

		?>

	</header><!-- .page-header -->

		<div class="row">

			<div class="left-content col s12 m8">

				<?php

				if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>

				<?php

				endif;

				/* Start the Loop */

				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				<?php if (function_exists("pagination")) {

				pagination($additional_loop->max_num_pages

				);

				} 

				?>	

			</div><!-- #main -->

		<?php get_sidebar();?>

	</div><!-- #primary -->
	
<?php get_footer();?>