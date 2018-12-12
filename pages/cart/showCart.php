<?php

$userId = $_SESSION['user_id'];
$sql = "SELECT products.id, products.name, products.price, cart.quantity
        FROM products
        INNER JOIN cart ON cart.product_id=products.id WHERE cart.user_id = '{$userId}'";
$resultCart = queryAll($sql);
$products = extract($resultCart);
render("showCart_tpl",['products' => $resultCart]);


