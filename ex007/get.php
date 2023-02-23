<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DADOS</title>
</head>
<body>
  <?php
    $valor = isset($_GET["valor"]) ? $_GET["valor"] : "[não informado]";
    echo "Digitou $valor";
  ?>
  <a href="./index.html">VOLTAR</a>
</body>
</html>
