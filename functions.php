<?php
/**
 * Theme scripts and stylesheet dependencies
 * @package trestle
 */

add_action( 'wp_enqueue_scripts', 'toolkit_enqueue_styles' );
function toolkit_enqueue_styles() {
    wp_enqueue_style('toolkit-style', get_theme_file_uri() . '/dist/css/styles.css');

    wp_enqueue_script('toolkit-script', get_theme_file_uri() . '/dist/js/script.js', array('jquery'), '20151215', true);

}
