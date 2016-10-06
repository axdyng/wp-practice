<?php

  /**
   * Enqueue scripts and styles.
   *
   */
  function test_script_enqueue() {
    wp_enqueue_style( 'test-style', get_template_directory_uri() . '/css/test.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'test-js', get_template_directory_uri() . '/js/test.js', array('jquery'), '1.0.0', true );
  }
  // Add function when wordpress is enquing scripts
  add_action( 'wp_enqueue_scripts', 'test_script_enqueue' );

  function test_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
  }
  // Add theme's support when wp is initialized
  add_action(init, test_theme_setup);
