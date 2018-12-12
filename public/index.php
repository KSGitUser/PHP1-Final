<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . "autoload.php";

session_start();


if (!$path = preg_replace(["#^/#", "#[?].^#"], "", $_SERVER['REQUEST_URI'])) {
    $path= "product";
    /* var_dump($path); */
}

$parts = explode("/", $path);
$page = $parts[0];
$action = $parts[1] ?? "index";

$pageName = PAGES_DIR . $page . "/" . $action . ".php";


if (file_exists($pageName)) {
/*   var_dump($pageName); */
  include $pageName;
} else {
  echo "Такой страницы нет";
}
 

?> 