<?php

// Recent Posts Widgets //

Class Custom_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
function widget($args, $instance) {
extract( $args );
$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);		
if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
$number = 10;
$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
if( $r->have_posts() ) :
echo $before_widget;
if( $title ) echo $before_title . $title . $after_title; ?>
<ul class="collection rpwidget">
<?php while( $r->have_posts() ) : $r->the_post(); ?>				
<li class="collection-item avatar">
<?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft circle' ) ); ?>
<span class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
<p>by <?php the_author(); ?> on <?php echo get_the_date(); ?></p>
</li>
<?php endwhile; ?>
</ul>
<?php
echo $after_widget;
wp_reset_postdata();
endif;
}
}
function my_recent_widget_registration() {
unregister_widget('WP_Widget_Recent_Posts');
register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');
?>