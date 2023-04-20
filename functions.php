<?php

define('CHILD_THEME_VERSION', '1.0.0');

function arkhe_child_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'arkhe_child_enqueue_styles');


// Enqueue Google Fonts
function enqueue_google_fonts()
{
  wp_enqueue_style( 'google-font-poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700', array(), CHILD_THEME_VERSION );
  wp_enqueue_style( 'google-font-notosansjp', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700', array(), CHILD_THEME_VERSION );

}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


// Enqueue Child theme styles
function enqueue_child_theme_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/main.css', array('parent-style'), CHILD_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
