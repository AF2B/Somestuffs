<?php

declare(strict_types = 1);

class Produto{

  private $conexao;

  //SQLITEDB
  public function __construct(){
    try{
    $this->conexao = new PDO(
      "sqlite:exemplo.db"
      );
  }
  catch (Exception $e){
    echo $e->getMessage();
    die();
  }
}

  public function list(){
    //...
  }

  public function insert(){
    //...
  }

  public function update(){
    //...
  }

  public function delete(){
    //...
  }
}
