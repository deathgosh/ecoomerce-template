<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="card">
<div class="card-image">
<?php if( has_post_thumbnail() ) {//Check for feature image?>
<div class="post-image">
<?php the_post_thumbnail('custom-size'); ?>
</div>
<?php } ?>
</div>
<span class="cardpage-title">	
<header class="entry-header">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->
</span>
<div class="card-content">
<?php the_content();?>
</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
