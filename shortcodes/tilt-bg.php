<?php

function tilt_bg_shortcode($atts)
{

  // Extract shortcode attributes
  $atts = shortcode_atts(array(
    'class' => 'default', // Default class value if none is specified
  ), $atts);

  ob_start(); ?>

  <div class="tilt-bg <?php echo esc_attr( $atts['class'] ); ?> alignfull">
    <div class="custom-shape-divider-top-1682382870">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path class="shape-fill" d="M1200 120L0 16.48 0 0 1200 0 1200 120z"></path>
      </svg>
    </div>
  </div>

<?php
  return ob_get_clean();
}
add_shortcode('tilt_bg', 'tilt_bg_shortcode');
