<?php
  class Db {
    public $banco = null;

    function __construct() {
      $host    = 'mysql:host=mysql4.gear.host;';
      $nome    = 'dbname=alexisdb';
      $usuario = 'alexisdb';
      $senha   = 'killevil99*';

      try {
        $banco = new PDO("$host $nome", $usuario, $senha);

        $this->banco = $banco;
      }

      catch(PDOException $e) {
        echo $e;
      }
    }

    function adicionar(){
      $banco = $this->banco;
      $sql   = "INSERT INTO usuarios (usuario, senha, nome) VALUES ('funcao', 'lalalala', 'testandooooo')";

      $banco->query($sql);
    }
  }
?>
