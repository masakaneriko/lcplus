<?php 

// use the shortcode like this
// [flow_chart items="Item 1, Item 2, Item 3"]


function flow_chart_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'items' => '',
    ),
    $atts
  );

  $items = explode(',', $atts['items']);
  ob_start(); ?>

  <div class="flow-chart">
    <ul>
      <?php foreach ($items as $item) : ?>
        <li><?php echo esc_html($item); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <?php
  return ob_get_clean();
}
add_shortcode('flow_chart', 'flow_chart_shortcode');
