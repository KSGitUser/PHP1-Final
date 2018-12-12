<?php

$productId = (int) $_GET['id'];
$userId = $_SESSION['user_id'];
$sql = "DELETE FROM cart WHERE user_id = '{$userId}' and product_id = {$productId}";
$result = execute($sql);
redirect("/cart/showCart/");
 