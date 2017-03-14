<?php
  class Db {
    public $banco = null;

    function __construct() {
      $host    = 'mysql4.gear.host';
      $nome    = 'alexisdb';
      $usuario = 'alexisdb';
      $senha   = 'killevil99*';

      try {
        $banco = new PDO('mysql:host=' . $host . ';' . 'dbname=' . $nome, $usuario, $senha);
        $sql   = 'Select * from `usuarios`';

        foreach ($banco->query($sql) as $row){
          echo $row['nome'] . '<br>';
        }

        $this->banco = $banco;
      }

      catch(PDOException $e) {
        echo $e->getMessage();
        echo "1";
      }
    }

    function status(){
      $banco = $this->banco;

      echo $banco->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }

    function adicionar(){
      $banco = $this->banco;
      $sql   = "INSERT INTO usuarios (usuario, senha, nome) VALUES ('funcao', 'lalalala', 'testandooooo')";

      $banco->query($sql);
    }
  }
?>
