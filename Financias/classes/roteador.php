<?php
class Roteador {

  public function rotear($url){
    include 'rotas.php';

    if (isset($rotas[$url])) {
      $arquivoView = "./view/".$rotas[$url].".php";
    }
    else {
      $arquivoView = "./view/erro.php";
    }

    return $arquivoView;
  }
}
?>
