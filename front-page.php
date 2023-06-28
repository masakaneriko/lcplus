<?php

/**
 * front-page.php
 */
get_header(); ?>


<main <?php Arkhe::main_attrs(); ?>>

  <div id="hero" class="alignfull">
    <div id="lottie"></div>
    <div class="hero-text">
      <h1>
        <span class="sub-title">
          Web・チラシ・看板で
        </span>
        御社の魅力を発信します
      </h1>
    </div>
    <div class="hero-image">
      <img class="hero-image-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lc_monitor.png" alt="monitor with logo" width="100%" height="auto">
      <img class="hero-image-left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.png" alt="image of people working" width="100%" height="auto">
      <img class="hero-image-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_2.png" alt="image of people in a video call" width="100%" height="auto">
    </div>
  </div>

  <?php
  // Start the loop
  while (have_posts()) :
    the_post();

    // Display the page content
    the_content();

  endwhile; // End of the loop.
  ?>
</main>

<?php get_footer(); ?>