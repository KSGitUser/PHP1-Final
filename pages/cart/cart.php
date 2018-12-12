<?php
/* header("Content-Type: text/html; charset=utf-8");

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "route.php";
require_once ENGINE_DIR . "cart.php"; */

$product_id = $_GET['id'];
addToCart($product_id);
redirect("/");
/* $numProductsCart = getQuantatiInCart();
var_dump($numProductsCart);
var_dump($numProductsCart['SUM(quantity)']);
render('cart_quant_tpl', ["quantInCart" => $numProductsCart['SUM(quantity)']]); */
/* redirect("/product/index"); */
