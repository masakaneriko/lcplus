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
      // commenting out the original line below
      // do_action( 'arkhe_start_content' ); // テーマ側でも使用
    ?>
    <?php
    // removed #top_title_area from specific pages. (default hero and breadcrumbs) 
    // inc/hooks/self_hooks.php ???
    // use this for breadcrumb -> Arkhe::get_part( 'other/breadcrumb' );
      if ( ! is_page_template( 'service-template.php' ) && ! is_page( array( 'about-us', 'contact-us' ) ) ) {
          do_action( 'arkhe_start_content' );
      }
    ?>

		<div class="l-content__body l-container">
