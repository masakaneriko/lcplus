<?php

function slider_price_shortcode()
{
  ob_start(); ?>

  <div class="price-slider">
    <div class="swiper-price">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_web.jpg" alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_dtp.jpg" alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_sign.jpg" alt="">
          </a>
        </div>
      </div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
    </div>
    <div class="swiper-pagination"></div>
  </div>

<?php
  return ob_get_clean();
}
add_shortcode('slider_price', 'slider_price_shortcode');
