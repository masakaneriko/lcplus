<?php

/**
 * front-page.php
 */
get_header(); ?>


<main>
  <div>YUM YUM</div>
  <img style="min-height: 70vh" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReFFZ-Hq0f9ovUT9-2K4n0xb-czaY4E2DdYR_NaZY4&s" alt="">
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