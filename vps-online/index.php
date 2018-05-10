<?php get_header(); ?>

	<div class="row">
		<div class="col s12 m8">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
		<?php get_sidebar();?>
	</div><!-- #primary -->
 <footer class="page-footer white">
  
      <div class="row">
        <div class="col l6 s12">
          <p class="the-widget"><?php dynamic_sidebar( 'f3' ); ?></p>
        </div>
        <div class="col l3 s12">
          <ul>
            <li><a class="black-text" ><?php dynamic_sidebar( 'f1' ); ?></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <ul>
            <li><a class="black-text" href="#!"><?php dynamic_sidebar( 'f2' ); ?></a></li>
          </ul>
        </div>
      <?php get_footer(); ?>
    </div>

  </footer>

