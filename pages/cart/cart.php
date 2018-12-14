<?php


$product_id = $_GET['id'];
addToCart($product_id);



/* redirect($_SERVER['HTTP_REFERER']); */
$quant = getQuantatiInCart();

echo 
  json_encode(['number'=> $quant]);




