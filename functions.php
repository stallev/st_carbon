<?php
  remove_action('wp_head',             'print_emoji_detection_script', 7 );
  remove_action('admin_print_scripts', 'print_emoji_detection_script' );
  remove_action('wp_print_styles',     'print_emoji_styles' );
  remove_action('admin_print_styles',  'print_emoji_styles' );

  remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
  remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
  remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
  remove_action('wp_head', 'rsd_link'); // remove EditURI
  remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
  remove_action('wp_head', 'rel_canonical'); //remove canonical
  remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
  remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

  add_action('wp_enqueue_scripts', 'site_styles');
  function site_styles(){
    $version = '0.0.0.0';wp_dequeue_style( 'wp-block-library' );
    wp_enqueue_style('wp-css', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/assets/css/bootstrap.min.css', [], $version);
    wp_enqueue_style('style-site', get_template_directory_uri().'/assets/css/style.css', [], $version);
    wp_enqueue_style('custom', get_template_directory_uri().'/assets/css/custom.css', [], $version);
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', [], $version);
    //add_scripts();
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.3.1.min.js', [], $version, true);
    wp_enqueue_script('bootstrap.min.jsa', get_template_directory_uri().'/assets/js/bootstrap.min.js', [], $version, true);
  }


  add_action( 'wp_footer', 'my_deregister_scripts' );
  function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
  }
  add_action( 'after_setup_theme', 'crb_load' );
  function crb_load() {
      require_once('includes/carbon-fields/vendor/autoload.php' );
      \Carbon_Fields\Carbon_Fields::boot();
  }
  //подключение carbonfields
  add_action('carbon_fields_register_fields', 'register_carbon_fields');
  function register_carbon_fields() {
      require_once( 'includes/carbon-fields-options/theme-options.php' );
      require_once( 'includes/carbon-fields-options/post-meta.php' );
  }

  //регистрируем главное меню
  add_action( 'after_setup_theme', 'theme_support' );
  function theme_support() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
  }
  //кастомизация главного меню под классы Bootstrap
  function register_navwalker(){
    require_once get_template_directory() . '/includes/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker' );
  //расширенная кастомизация главного меню под классы Bootstrap
  /*function register_navwalker1(){
    require_once get_template_directory() . '/includes/extendednav/extendednav.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker1' );
  //require_once get_template_directory() . '/includes/extendednav/extendednav.php';*/
?>