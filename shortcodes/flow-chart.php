<?php

function flow_chart_shortcode($atts)
{

  ob_start(); ?>

  <div class="flow-chart">
    <ul>
      <li>➀お問い合わせ</li>
      <li>➁おみつもり</li>
      <li>➂スケジュール</li>
      <li>➃ご案内</li>
      <li>➄制作</li>
      <li>➅納品</li>
    </ul>
  </div>

<?php
  return ob_get_clean();
}
add_shortcode('flow_chart', 'flow_chart_shortcode');
