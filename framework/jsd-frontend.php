<?php

/**
 * 
 * Frontend Settings JSD
 * Version: 1.0.0
 * Date created: 9/11/2020
 * All rights reserved (c) 2021 Július Sipos
 * 
 */


/**
 * Scripts and Styles of the Website
 */

function jsd_scripts() {
	wp_enqueue_style('bs4', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '4', false);
	wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '1', false);
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,700&amp;subset=latin-ext', array(), '1', false);
	wp_enqueue_style( 'jsdizajner', get_stylesheet_uri() );
	wp_enqueue_style('bttns', get_template_directory_uri(). '/assets/css/buttons.css', array(), '1', false);

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3', true);
	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1', true);
	wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1', true);

}

add_action( 'wp_enqueue_scripts', 'jsd_scripts' );
