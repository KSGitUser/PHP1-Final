<?php

function addToCart($product_id)
{
    $validId = validateSql($product_id);
    /*   session_start(); */
    $userId = $_SESSION['user_id'];
    $sql = "SELECT quantity FROM cart WHERE  (user_id = '{$userId}') AND (product_id = {$validId})";
    $num = $_SESSION['user_id'];
    $res = execute($sql);
    if ((execute($sql)) && (mysqli_num_rows(execute($sql)) > 0)) {
        $sql = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = '{$userId}' AND product_id = {$validId} ";
    } else {
        $sql = "INSERT INTO cart (id, product_id, quantity, user_id) VALUES (null,{$validId}, 1, '{$userId}')";}
    execute($sql);
}

function getQuantatiInCart()
{
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM cart WHERE user_id = '{$userId}'";
    if (execute($sql)) {
        $sql = "SELECT SUM(quantity) FROM cart WHERE  user_id = '{$userId}'";
        $numProductsCart = queryOne($sql);
        return $numProductsCart['SUM(quantity)'];
    }

}

function renderCart()
{
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM cart WHERE user_id = '{$userId}'";
    $cartResult = queryAll($sql);
    var_dump($cartResult);
}

function deleteUserCartRecords($user_id)
{

    $userId = $user_id;
    $sql = "SELECT * FROM cart WHERE user_id = '{$userId}'";
    if (mysqli_num_rows(execute($sql)) > 0) {
        $sql = "DELETE FROM cart WHERE user_id = '{$userId}'";
        $result = execute($sql);
    }
}
