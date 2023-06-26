<?php

// // For testing purposes
// // Displays the name of the Template used
// add_action('wp_head', 'show_template');
// function show_template()
// {
//     global $template;
//     echo basename($template);
// }


define('CHILD_THEME_VERSION', filemtime(get_stylesheet_directory() . '/css/main.min.css'));

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
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/main.min.css', array('parent-style'), CHILD_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');


// add GSAP, swiper and lottie to front-page
function front_page_enqueue_script()
{
  if (is_front_page()) {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js', array(), '3.9.0', true);
    wp_enqueue_script('gsap-text', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/TextPlugin.min.js', array(), '3.9.0', true);
    wp_enqueue_script('gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js', null, null, true);
    wp_enqueue_script('gsap-script', get_stylesheet_directory_uri() . '/js/gsap.js', array('gsap', 'gsap-scroll'), CHILD_THEME_VERSION, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), true);
    wp_enqueue_style('swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array());
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/js/swiper.js', array('swiper'), CHILD_THEME_VERSION, true);
    wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.9/lottie.min.js', array(), null, true);
    wp_enqueue_script('lottie-script', get_stylesheet_directory_uri() . '/js/lottie.js', array('lottie'), CHILD_THEME_VERSION, true);
  }
}
add_action('wp_enqueue_scripts', 'front_page_enqueue_script');


// Include shortcodes
require_once(get_stylesheet_directory() . '/shortcodes/slider-group.php');
require_once(get_stylesheet_directory() . '/shortcodes/slider-price.php');
require_once(get_stylesheet_directory() . '/shortcodes/tilt-bg.php');
// require_once(get_stylesheet_directory() . '/shortcodes/flow-chart.php');
require_once(get_stylesheet_directory() . '/shortcodes/plus-divider.php');


// add scripts to service-template pages
function enqueue_service_script()
{
  if (is_page_template('service-template.php')) {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js', array(), '3.9.0', true);
    wp_enqueue_script('gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js', null, null, true);
    wp_enqueue_script('service-script', get_stylesheet_directory_uri() . '/js/service.js', array('gsap', 'gsap-scroll'), CHILD_THEME_VERSION, true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_service_script');


// enqueue google tag manager in head
function enqueue_google_tag_manager()
{
?>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5VLKF7D');
  </script>
  <!-- End Google Tag Manager -->
<?php
}
// add_action('wp_head', 'enqueue_google_tag_manager');
