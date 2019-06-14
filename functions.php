<?php
function mntema_add_scripts() {
    wp_enqueue_style('SlideShow', get_template_directory_uri() . '/css/slideshow.css');
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('MNstyle', get_stylesheet_uri());

    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'mntema_add_scripts');

add_theme_support( 'post-thumbnails' ); 
?>