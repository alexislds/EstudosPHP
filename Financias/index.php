  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/import.css">
    <title>Financias</title>
  </head>
  <body>
    <?php
      include 'header.php';
    ?>

    <h1>Tela Principal</h1><br>

    <?php
    if(!empty($_POST)) {
      include 'db.php';

      $db = new Db;
    }
    else {
      echo "<p>Por favor se logue antes</p>";
    }
    ?>
  </body>
  </html>
