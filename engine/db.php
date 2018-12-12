<?php

//подключение к базе данных
function getConnection() {
  $config = include CONFIG_DIR . "db.php";
  static $conn = null;
  if (is_null($conn)) {
    $conn = mysqli_connect(
      $config['host'], $config['user'], $config['password'], $config['dbName']);
  }
  return $conn;
}

//выполнение простого запроса к базе данных без выборки
function execute($sql) {
  return mysqli_query(getConnection(), $sql);
}

//выполнение запроса с выборкой в результатате получим все данные в ассоциативном массиве
function queryAll($sql) {
  
  return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

//выполнение запроса к единственной записи в ассоциативном массиве
function queryOne($sql) {
  return queryAll($sql)[0];
}

//завершить соединение с базой данной
function closeConnection() {
  return mysqli_close(getConnection());
}


//удаляем лишние символы из полученных данных чтобы обезапасить обращение к базе, уменьшить вероятность SQL инъекций
function validateSql($data) {
  return mysqli_real_escape_string(getConnection(),strip_tags($data));
}