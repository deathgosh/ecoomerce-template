<?php

//Pagination //

function pagination($pages = '', $range = 4)
{  
$showitems = ($range * 2)+1;  
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}   
if(1 != $pages)
{
echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
echo "</div>\n";
}
}
// Post Navigations //
 function my_nav_next($output, $format, $link, $post ) {
 $text = ' Prev post';
 $rel = 'prev';

return sprintf('<a href="%1$s" rel="%3$s" rel="nofollow" class="button-left left"><span class="black-text"><i class="mdi-navigation-chevron-left left"></i>%2$s</span></a>' , get_permalink( $post ), $text, $rel );
}
function my_nav_previous($output, $format, $link, $post ) {
 $text = ' Next post';
 $rel = 'next';
return sprintf('<a href="%1$s" rel="%3$s" rel="nofollow" class="button-right right"><span class="black-text">%2$s<i class="mdi-navigation-chevron-right right"></i></span></a>' , get_permalink( $post ), $text, $rel );
}
add_filter( 'next_post_link' , 'my_nav_next' , 10, 4);
add_filter( 'previous_post_link' , 'my_nav_previous' , 10, 4);
?>