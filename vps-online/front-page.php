<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Material Grace
 */
?>
<div class="market-pitch">
<?php get_header(); ?>

  <div class="slider">
    <ul class="slides card">
      <li>
        <img src='<?php echo esc_url( get_theme_mod( 'vps_online_slider1' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a><!-- random image -->
          </li>
      <li>
        <img src='<?php echo esc_url( get_theme_mod( 'vps_online_slider2' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a><!-- random image -->
      </li>
      <li>
        <img src='<?php echo esc_url( get_theme_mod( 'vps_online_slider3' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a><!-- random image --> <!-- random image -->
      </li>
      <li>
        <img src='<?php echo esc_url( get_theme_mod( 'vps_online_slider4' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a><!-- random image --> <!-- random image -->
      </li>
    </ul>
  </div>
    <div class="section">

      <!--   Icon Section   -->
      <div class="row white">
        <div class="col s12 m4">
          <div class="icon-block card-panel yellow">
            <h2 class="center black-text"><i class="material-icons">flash_on</i></h2>
            <p><?php dynamic_sidebar( 'h1' ); ?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block card-panel yellow">
            <h2 class="center black-text"><i class="material-icons">group</i></h2>
            <p><?php dynamic_sidebar( 'h2' ); ?></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block card-panel yellow">
            <h2 class="center black-text"><i class="material-icons">settings</i></h2>
            <p><?php dynamic_sidebar( 'h3' ); ?></p>
          </div>
        </div>
      </div>
    </div>

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
</div>