<?php

function slider_group_shortcode() {
  ob_start(); ?>

  <div class="group-slider">
    <h3 class="fadein-up">グループ会社でおこなっている事業例</h3>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_energy.png" alt="">
          <p>自然エネルギー</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_education.png" alt="">
          <p>教育く</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_agriculture.png" alt="">
          <p>農業</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_relaxation.png" alt="">
          <p>リラクゼーション</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_energy.png" alt="">
          <p>自然エネルギー</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_education.png" alt="">
          <p>教育く</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_agriculture.png" alt="">
          <p>農業</p>
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group_relaxation.png" alt="">
          <p>リラクゼーション</p>
        </div>
      </div>
    </div>
  </div>
  
  <?php
  return ob_get_clean();
}
add_shortcode( 'slider_group', 'slider_group_shortcode' );
