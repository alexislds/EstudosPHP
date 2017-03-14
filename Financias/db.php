<?php
  class Db {
    protected $banco = null;

    function __construct() {
      $host    = "mysql4.gear.host";
      $nome    = "alexisdb";
      $usuario = "alexisdb";
      $senha   = "killevil99*";

      try {
        $banco = new PDO('mysql:host=mysql4.gear.host;dbname=alexisdb', $usuario, $senha);
        echo 'Conectei<br>';

        $sql        = "Select * from `usuarios`";
        $resultados = $banco->query($sql);

        foreach ($resultados as $resultado) {
          print_r($resultado);
          echo '<br>';
        }
      }

      catch(PDOException $error) {
        echo $error->getMessage();
      }
    }
  }
?>
