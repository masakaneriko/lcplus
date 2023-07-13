<div class="group-slider">
  <h3>グループ会社でおこなっている事業例</h3>
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php if (have_rows('group_slider')) :
        while (have_rows('group_slider')) : the_row(); ?>
          <div class="swiper-slide">
            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>">
            <p><?php the_sub_field('caption'); ?></p>
          </div>
      <?php endwhile;
      endif; ?>
      <?php if (have_rows('group_slider')) :
        while (have_rows('group_slider')) : the_row(); ?>
          <div class="swiper-slide">
            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>">
            <p><?php the_sub_field('caption'); ?></p>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>