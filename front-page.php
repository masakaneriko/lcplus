<?php

/**
 * front-page.php
 */
get_header(); ?>


<main>
  <!-- <div class="hero">
    <div class="hero-text">
      <span>
      Web・チラシ・看板で
      </span>
      <h1>
        御社の魅力を発信します
      </h1>
    </div>
    <img style="min-height: 70vh" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fv.png" alt="">
  </div> -->
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