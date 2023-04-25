<?php

function slider_price_shortcode()
{
  ob_start(); ?>

  <div class="price-slider">
    <div class="swiper-price">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_chart.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_chart.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_chart.png" alt="">
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

<?php
  return ob_get_clean();
}
add_shortcode('slider_price', 'slider_price_shortcode');