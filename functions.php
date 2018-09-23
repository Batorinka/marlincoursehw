<?php

function connectToDB() {
  return new PDO('mysql:host=localhost;dbname=app3;charset=utf8;','root','123');
}

function dd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die;
}
