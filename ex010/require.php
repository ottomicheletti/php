<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Importando Funções de Outro Arquivo</title>
</head>
<body>
  <?php
    require "./funcoes.php";
    // require "./funcoes1.php"; -> neste caso, o PHP para de executar o código ao se deparar com a primeira função não encontrada

    echo "<h1>Testando funções importadas!</h1>";

    ola();

    mostraValor("24/02/23");
  ?>
</body>
</html>
