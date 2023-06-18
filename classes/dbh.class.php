<?php

class Dbh
{
  protected function connect()
  {
    try {
      $username = 'root';
      $password = '';
      $dbh = new PDO('mysql:host=localhost;dbname=php_oop_login', $username, $password);
      return $dbh;
    } catch (PDOException $e) {
      echo "Error:" . $e->getMessage() . "<br>";
      die();
    }
  }
}
