<?php
/* function render($template, $params =[]) {
extract($params); // пребразует ассоциативный массив впеременые с именем $key и значением $value
include TEMPLATES_DIR . "{$template}.php";
} */

function renderTemplate($template, array $params = [])
{
    extract($params);
    ob_start(); // помещаем в буфер */
    include TEMPLATES_DIR . $template . ".php";
    $content = ob_get_clean();
    return $content;
}

function render($template, array $params = [], $useLayout = true)
{
    $content = renderTemplate($template, $params);

  /*   $cart_quant_tpl = renderTemplate("cart_quant_tpl", ['quantInCart' => "32"]); */
    if ($useLayout) {
        $content = renderTemplate('layouts/main', ['content' => $content]);
    }
    echo $content;

}
