<?php

class Connection {

  public static function make() {
    return new PDO('mysql:host=localhost;dbname=app3;charset=utf8;','root','123');
  }

}
