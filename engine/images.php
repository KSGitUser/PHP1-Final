<?php
require_once ENGINE_DIR . "db.php";

//получение игформации о файлах из базы данных
function getGallery()
{
    $sql = "SELECT * FROM product_img";
    return queryAll($sql);
}

//функция добавляет разгруженный файл в базу данных, в аргументах имя у input при загрузке
function addImageToDb($uploadName = 'img')
{
    $sourceFile = $_FILES[$uploadName]['name'];
    $source = ROOT_DIR . "{$uploadName}" . "/" . $sourceFile;
    $fileSize = filesize($source);
/* $conn = mysqli_connect("php1.my","root","", "shop"); */

    $sql = "INSERT INTO product_img (title, path, size)
VALUES ('{$sourceFile}', '{$sourceFile}', {$fileSize})";
/* $res = mysqli_query($conn, $sql); */
    execute($sql);

}

//получаем картинку из базы по ее Id
function getImageById($id) {
  $validId = (int) validateSql($id);
   $sql = "SELECT * FROM product_img WHERE id_img = {$validId}"; 
  return queryOne($sql);
}

//увеличивает поля views в базе данных при каждом запуске функции
function incPhotoViews($id) {
    $validId = (int) validateSql($id);
    $sql = "UPDATE product_img  SET views = views + 1 WHERE 
            id_img = {$validId}";
            var_dump($sql);
    return execute($sql);
}

function getOneImageByProductId($id) {
    $validId = (int) validateSql($id);
    $sql = "SELECT * FROM product_img WHERE product_id = {$validId}) LIMIT 1";
    return execute($sql);
}