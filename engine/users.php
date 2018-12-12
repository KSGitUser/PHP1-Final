<?php
/* include __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "/autoload.php"; */
/* require_once ENGINE_DIR . "/route.php"; */

//проверяем есть ли в пара пароль - пользователь
function getUserByLoginPass($login, $password) {
  $validLogin = validateSql($login);
  $validPassword = validateSql($password);
  return  queryOne("SELECT * FROM users 
    WHERE user = '{$validLogin}' AND password = '{$validPassword}'");
}