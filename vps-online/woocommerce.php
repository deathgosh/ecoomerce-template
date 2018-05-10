<?php get_header(); ?>

	<div class="row">
		<div class="col s12 m8 card">
			<?php woocommerce_content(); ?>
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

