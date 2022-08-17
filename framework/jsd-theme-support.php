<?php

/**
 * 
 * Theme Support
 * Version: 1.5.0
 * Date created: 9/11/2020
 * All rights reserved (c) 2021 Július Sipos
 * 
 */


if ( ! function_exists( 'jsd_setup_theme' ) ) :
  function jsd_setup_theme() {

    // Make theme available for translation: Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'jsd', JSD_FRAMEWORK_LOCALIZE );

    // Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'html5', array(
      // 'search-form',
      // 'comment-form',
      // 'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    ) );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );
    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Default Attachment Display Settings
    update_option( 'image_default_align', 'none' );
    update_option( 'image_default_link_type', 'none' );
    update_option( 'image_default_size', 'large' );

    // Custom CSS-Styles of Wordpress Gallery
    add_filter( 'use_default_gallery_style', '__return_false' );

  }
  add_action( 'after_setup_theme', 'jsd_setup_theme' );
endif;

?>