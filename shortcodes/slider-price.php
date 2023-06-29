<?php

function slider_price_shortcode()
{
  ob_start(); ?>

  <div class="price-slider">
    <div class="swiper-price">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="https:/lc-plus.net/web#works_h2">
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_web.webp" alt="sample price list image for web"> -->
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/price_sample_web.webp" alt="sample price list image for web">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https:/lc-plus.net/dtp#works">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_dtp.webp" alt="sample price list for dtp" >
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https:/lc-plus.net/sign#works">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/price_sample_sign.webp" alt="sample price list for sign">
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
