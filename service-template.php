<?php
/*
Template Name: Service Template
*/
get_header(); ?>

<main <?php Arkhe::main_attrs(); ?>>

  <?php
  // Custom Hero Section
  ?>
  <div id="service_hero" class="alignfull">
    <div class="bg_clip
        <?php
        // adds .flipped class if checked on acf
        $is_checked = get_field('hero_bg_flip');

        if ($is_checked) {
          echo ' flipped';
        }
        ?>">
    </div>
    <div class="l-container">
      <div class="service_title">
        <div class="service_title_plus">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_mido.png">
        </div>
        <h1><?php echo the_title(); ?></h1>
      </div>
      <div class="service_hero_content">
        <div class="service_hero_image">
          <?php
          $image = get_field('hero_image');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="service_hero_text">
          <!-- <span><?php echo get_field('hero_span'); ?></span> -->
          <h2><?php echo get_field('hero_h2'); ?></h2>
          <p><?php echo get_field('hero_p'); ?></p>
        </div>
      </div>
    </div>

    <div class="scrololol"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_mido.png" alt=""></div>

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