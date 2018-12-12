<?php
/* header("Content-Type: text/html; charset=utf-8");
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "/files.php";
include ENGINE_DIR . "/route.php";
include ENGINE_DIR . "/images.php";
include VENDOR_DIR . "/funcImgResize.php"; */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    uploadFile('img', ROOT_DIR . "img",
        function ($sourceDir, $sourceFile) {
            $source = $sourceDir . "/" . $sourceFile;
            img_resize($source, ROOT_DIR . "img/small/" . $sourceFile, 100, 75);
        }
    );
    addImageToDb('img');

    redirect("/gallery.php");
}

/* $files = getFilesInFolder(ROOT_DIR . "img/small/"); */
$gallery = getGallery();
include TEMPLATES_DIR . "gallery.php";
include TEMPLATES_DIR . "upload_form.php";
