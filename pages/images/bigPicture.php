<?php
/* header("Content-Type: text/html; charset=utf-8");

include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/files.php";
include ENGINE_DIR . "/route.php";
include ENGINE_DIR . "/images.php";
 */


$id = $_GET['id'];
incPhotoViews($id);
/* $id = 4; */
$image = getImageById($id);
include TEMPLATES_DIR . "bigPicture_tpl.php";
?>

