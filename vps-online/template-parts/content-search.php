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
<div class="entry-meta">
<div class="chip">
<?php vps_online_posted_on(); ?>
</div>
</div><!-- .entry-meta -->
</span>
</div>
<div class="card-content">
<?php if ( 'post' == get_post_type() ) : ?>
<?php endif; ?>
<div class="entry-content">
<?php the_excerpt();?>
<div class="card-action">
<footer class="entry-footer">
<?php vps_online_entry_footer(); ?>
</footer><!-- .entry-footer -->
</div>
</div>
</article>