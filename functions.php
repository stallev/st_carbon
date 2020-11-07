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
    $version = '0.0.0.0';
    /*wp_dequeue_style( 'wp-block-library' );
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/libs/bootstrap/bootstrap-grid.min.css', [], $version);
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/libs/font-awesome/css/font-awesome.min.css', [], $version);
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/libs/magnific-popup/magnific-popup.css', [], $version);
    wp_enqueue_style('fonts', get_template_directory_uri().'/css/fonts.css', [], $version);
    wp_enqueue_style('wp-css', get_stylesheet_uri(), [], $version);
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', [], $version);
    wp_enqueue_style('media', get_template_directory_uri().'/css/media.css', [], $version);*/

    //add_scripts();
    wp_enqueue_script('jquery', get_template_directory_uri().'/libs/jquery/jquery-2.1.3.min.js', [], $version, true);
    wp_enqueue_script('bootstrap.min.jsa', get_template_directory_uri().'/libs/bootstrap/bootstrap.min.js', [], $version, true);
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri().'/libs/magnific-popup/jquery.magnific-popup.min.js', [], $version, true);
    wp_enqueue_script('slick', get_template_directory_uri().'/libs/slick/slick.min.js', [], $version, true);

    wp_enqueue_script('mixitup', get_template_directory_uri().'/libs/mixitup/mixitup.min.js', [], $version, true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'/libs/waypoints/waypoints.min.js', [], $version, true);
    wp_enqueue_script('equalHeights', get_template_directory_uri().'/libs/equalHeights/equalHeights.min.js', [], $version, true);
    wp_enqueue_script('PageScroll2id', get_template_directory_uri().'/libs/scroll2id/PageScroll2id.min.js', [], $version, true);
    wp_enqueue_script('main-script', get_template_directory_uri().'/js/scripts.js', [], $version, true);
    wp_enqueue_script('common-js', get_template_directory_uri().'/js/common.js', [], $version, true);
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
  add_action('carbon_fields_register_fields', 'register_carbon_fields');
  function register_carbon_fields() {
      require_once( 'includes/carbon-fields-options/theme-options.php' );
  }
 ?>