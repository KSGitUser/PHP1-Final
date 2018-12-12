<?php

function getAllProducts() {
  return queryAll("SELECT * FROM products");
}

function getProductById($id) {
  $validId = validateSql($id);
 return queryOne("SELECT * FROM products WHERE id = {$validId}");
}

function getProductImages($id) {
  $validId = validateSql($id);
  $sql = "SELECT * FROM product_img WHERE product_id = {$validId}";
  return queryAll($sql);
}