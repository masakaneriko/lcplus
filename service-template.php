<?php
/*
Template Name: Service Template
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php Arkhe::root_attrs(); ?>>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, viewport-fit=cover">
<?php
	wp_head();
	$setting = Arkhe::get_setting(); // SETTING取得
?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
<!-- Start: #wrapper -->
<div id="wrapper" class="l-wrapper">
<?php
	// ヘッダー
	do_action( 'arkhe_before_header' );
	Arkhe::get_part( 'header' );
	do_action( 'arkhe_after_header' );
?>
	<div id="content" class="l-content">
    <?php 
    // DISABLED FOR SERVICE PAGES -masa
    // use this for breadcrumb -> Arkhe::get_part( 'other/breadcrumb' );
    if ( ! is_page_template( 'service-template.php' ) ) : // Maybe move this if statement to the parent file? ?>
      <?php do_action( 'arkhe_start_content' ); // included in header.php & inc/hooks/self_hooks.php) ?>
    <?php endif; ?>


    <?php // lets add custom hero section here
          // move this down inside main? and add .alignfull?
    ?>
    <div id="service_hero">
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
        <h1><?php echo the_title(); ?></h1>
        <div class="service_hero_content">
          <div class="service_hero_text">

            <span><?php echo get_field('hero_span'); ?></span>
            <h2><?php echo get_field('hero_h2'); ?></h2>
            <p><?php echo get_field('hero_p'); ?></p>
          </div>
          <div class="service_hero_image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_web_hero.png" alt="">
          </div>
        </div>
      </div>
              
      <div class="scrotate" style="display: inline-block;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plus_mido.png" alt="" width="50px" height="50px"></div>

    </div>



		<div class="l-content__body l-container">
      <main>
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