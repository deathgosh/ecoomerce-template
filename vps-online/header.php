<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>

<div id="page" class="site">
	<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="nav-wrapper">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo black-text"><?php bloginfo('name');?></a>
		<div class="primary-nav">
		<div class="search-toggle">
		<i class="large material-icons right">search</i>
	 </div>
			<?php
				wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu_class' => 'right hide-on-med-and-down'
				));
			?>
			<?php
				wp_nav_menu(array(
				'menu_class' => 'side-nav',
				'menu_id' => 'mobilemenu',
				'theme_location' => 'primary',
				'items_wrap'      => '<ul id="slide-out" class="%2$s">%3$s</ul>'  
				));
			?>

		</div>
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav><!-- #site-navigation -->

<div id="search-container" class="search-box-wrapper clear">
	<div class="search-box">
		<?php get_search_form();?>
	</div>
</div>
<div class="clear"></div>       
</div>