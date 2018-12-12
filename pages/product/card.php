<?php 
/* header("Content-Type: text/html; charset=utf-8");
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/db.php";
include ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "products.php"; */


$id = (int) $_GET['id'];
$product = getProductById($id);
$images = getProductImages($id);
render("product_tpl", ['product' => $product, 'images' => $images]);