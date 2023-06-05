<?php

/**
 * front-page.php
 */
get_header(); ?>


<main <?php Arkhe::main_attrs(); ?>>

  <div class="alignfull">
    <section id="hero">
      <div class="hero-text">
        <h1>
          <span class="sub-title">
            Web・チラシ・看板で
          </span>
          御社の魅力を発信します
        </h1>
      </div>
      <div class="hero-image">
        <img class="hero-image-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/monitor.png" alt="">
        <img class="hero-image-left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.png" alt="">
        <img class="hero-image-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero_2.png" alt="">
      </div>
    </section>
    <div class="lc-rotate">
      <img class="lc-rotate-text" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rotate-lc-text.png" alt="">
      <img class="lc-rotate-plus" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rotate-lc-plus.png" alt="">
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

<? get_footer(); ?>