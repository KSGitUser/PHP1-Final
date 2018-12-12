<?php
/* header("Content-Type: text/html; charset=utf-8");
include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "/db.php";
include ENGINE_DIR . "/users.php";
include ENGINE_DIR . "/render.php"; */


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($user = getUserByLoginPass($login, $password)) {
          /* session_start(); */
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['message'] = "Вход выполнен";
          $message = "вход Выполнен";
           /* setcookie("user_id", $user['id']); */
       /*    render("login_tpl", ["message" => $message]); */
         
        
    } else {$message = "Не вверно введены логин и пароль";
        $_SESSION['message'] = "Не вверно введены логин и пароль";}
   

} else {$message = "";}

redirect("/");
/* render("login_tpl", ["message" => $message]); */


