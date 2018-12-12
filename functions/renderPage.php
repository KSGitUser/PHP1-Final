<?php
function renderTemplate($template, array $param = []) {
  extract($params);
  ob_start(); // помещаем в буфер
  include TEMPLATES_DIR . $template . ".php";
  return ob_end_clean();
}


function render($template, array $param=[], $useLayout = true) {
  $content = renderTemplate($template, $params);
  if ($useLayout) {
    $content = renderTemplate('layouts/main',['content' => $content]);
  }
  return $content;
  
} 