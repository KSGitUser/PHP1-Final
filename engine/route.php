<?php 


//перенаправление загрузки
function redirect($url) {
  header("Location: {$url}");
}