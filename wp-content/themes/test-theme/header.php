<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WP Practice Theme</title>
    <?php wp_head(); ?>
  </head>

  <?php
    if( is_front_page() ):
      $tehBody = ['root-body', 'awesome'];
    else:
      $tehBody = ['not-root-body'];
    endif;
  ?>
  <body <?php body_class( $tehBody ); ?>>
    <!-- Displays nav menu -->
    <?php wp_nav_menu(array('container'=>'nav', 'theme_location'=>'primary')); ?>
<!-- end of header -->
