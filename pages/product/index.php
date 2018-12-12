<?php
/* header("Content-Type: text/html; charset=utf-8");

require_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "/autoload.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "route.php";
require_once ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "images.php";*/

/* session_start(); */ 

function setUserIdToken()
    {
        $token  =   md5(uniqid(microtime(), true));
        return $token; 
    }

/* var_dump('old session: ' . $_SESSION['user_id']); */
if (!$user_id = $_SESSION['user_id']) {  
  $_SESSION['user_id'] = setUserIdToken();
  deleteUserCartRecords($_SESSION['user_id']);
/*   redirect("/auth/login/"); */
}


$products = getAllProducts();
foreach($products as $product) {
  $productId = $product['id'];
  $arrayOfImages[$productId] = getProductImages($productId);
}

/* render("catalog_tpl", ["products" => $products, "images" => $arrayOfImages]); */

/* $numProductsCart = getQuantatiInCart();
var_dump($numProductsCart);
var_dump($numProductsCart['SUM(quantity)']);
render('cart_quant_tpl', ["quantInCart" => $numProductsCart['SUM(quantity)']]); */




render("catalog_tpl", ["products" => $products, "images" => $arrayOfImages]);
?>
 