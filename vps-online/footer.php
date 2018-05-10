<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VPS_ONLINE
 */

?>
</div><!-- #content -->
<div class="copyright">
<a href="<?php echo home_url('/');?>" class="logo"><b>&copy; <?php bloginfo('name')?> 
 <?php echo date('Y'); ?></b></a>
</div>
<?php wp_footer(); ?>
</body>
</html>