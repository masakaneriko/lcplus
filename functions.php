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
  wp_enqueue_style('google-font-poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700', array(), CHILD_THEME_VERSION);
  wp_enqueue_style('google-font-notosansjp', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700', array(), CHILD_THEME_VERSION);
  wp_enqueue_style('font-yakuhanjp', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css', array(), CHILD_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


// Enqueue Child theme styles
function enqueue_child_theme_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), CHILD_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

// add GSAP & swiper to front-page
function front_page_enqueue_script()
{
  if (is_front_page()) {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js', array(), '3.9.0', true);
    wp_enqueue_script('gsap-script', get_stylesheet_directory_uri() . '/js/gsap.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), true );
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array());
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '1.0', true);
  }
}
add_action('wp_enqueue_scripts', 'front_page_enqueue_script');


// Include shortcodes.php
require_once(get_stylesheet_directory() . '/shortcodes/group-slider.php');
require_once(get_stylesheet_directory() . '/shortcodes/tilt-bg.php');


