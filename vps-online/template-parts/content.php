<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="card">
<div class="card-image">
<?php if( has_post_thumbnail() ) {//Check for feature image?>
<div class="post-image">
<?php the_post_thumbnail('custom-size'); ?>
</div>
<?php } ?>
<span class="card-title">	
<header class="entry-header">
<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
</header><!-- .entry-header -->
<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
<div class="chip">
<?php vps_online_posted_on(); ?>
</div>
</div><!-- .entry-meta -->
<?php endif; ?>
</span>
</div>
<div class="card-content">
<div class="entry-content">
<?php the_excerpt();?>
</div><!-- .entry-content -->
</div>
<div class="card-action">
<footer class="entry-footer">
<?php vps_online_posted_on(); ?>
</footer><!-- .entry-footer -->
</div>
</article><!-- #post-## -->
 