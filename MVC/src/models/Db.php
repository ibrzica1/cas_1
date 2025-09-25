<?php

namespace MVC\models;

class Db
{

  public $connection;

  public function __construct()
  {
    $this->connection = new \PDO('mysql:host=localhost;dbname=php_28',"root","");
  }

}