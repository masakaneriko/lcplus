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


    <!-- and lets add custom hero section here  -->
    <!-- move this down inside main? and add .alignfull? -->
    <div id="top_hero_area">
      <p>this is my custom hero area</p>
      <div style="background: magenta; height: 60vh;"></div>
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