<?php

function plus_divider_shortcode()
{

  ob_start(); ?>

  <div class="plus-divider">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>

<?php
  return ob_get_clean();
}
add_shortcode('plus_divider', 'plus_divider_shortcode');
