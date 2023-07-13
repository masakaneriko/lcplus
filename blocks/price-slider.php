<div class="price-slider">
  <div class="swiper-price">
    <div class="swiper-wrapper">
      <?php if (have_rows('price_slider')) :
        while (have_rows('price_slider')) : the_row(); ?>

          <div class="swiper-slide">
            <a href="<?php the_sub_field('url'); ?>">
              <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>">
            </a>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
    <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
  </div>
  <div class="swiper-pagination"></div>
</div>