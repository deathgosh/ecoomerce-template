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
<?php the_content(); ?>
</div><!-- .entry-content -->
</div>
<div class="card-action">
<footer class="entry-footer">
<?php vps_online_entry_footer(); ?>
</footer><!-- .entry-footer -->
</div>


<!--BEGIN author-bio-->
<div class="author-bio">
			<div class="author-info">
				<h3 class="author-title">
				Author - <?php the_author_link(); ?></h3>
				<div class="gravatar">
				<?php echo get_avatar( get_the_author_meta('email'), '32' ); ?>
				</div>
				<p class="author-description"><?php the_author_meta('description'); ?></p>
				<p class="website">Website: <a href="<?php the_author_meta('user_url');?>">
				<?php the_author_meta('user_url');?></a></p>
			</div>
</div>
<!--END .author-bio-->
</article><!-- #post-## -->