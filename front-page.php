<?php

/**
 * front-page.php
 */
get_header(); ?>


<main <?php Arkhe::main_attrs(); ?>>

  <div class="alignfull">
    <section id="hero">
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
        <img class="hero-image-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lc_monitor.png" alt="monitor with logo">
        <img class="hero-image-left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.png" alt="image of people working">
        <img class="hero-image-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_2.png" alt="image of people in a video call">
      </div>
    </section>
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

<? get_footer(); ?>