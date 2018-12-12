<?php

// получение списка файлов из директории и удалении директорий из этого списка
function getFilesInFolder($dir)
{
    $files = scandir($dir);
    foreach ($files as $key => $file) {
        if (is_dir($dir . "/" . $file)) {
            unset($files[$key]);
        }
    }
    return $files;
}

//загрузка файлов на сервер (первый параметр из формы параметра name)
function uploadFile($uploadName, $distanceDir, callable $callback = null)
{
    if (isset($_FILES[$uploadName])) {
        $uploadFile = $_FILES[$uploadName];
        $destinationFile = $distanceDir . "/" . $uploadFile['name'];
        move_uploaded_file($uploadFile['tmp_name'], $destinationFile);
    }
    if ($callback) {
        $callback($distanceDir, $uploadFile['name']);
    }

}
