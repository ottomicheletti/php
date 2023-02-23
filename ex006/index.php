<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de Atribuição</title>
</head>

<body>
  <?php
    // Testar com a URL http://localhost/php/ex004/?n1=9&n2=6
    $n1 = $_GET["n1"]; // "n1" é pego dos parâmetros da URL
    $n2 = $_GET["n2"]; // "n2" é pego dos parâmetros da URL
    $media = ($n1 + $n2) / 2;
    echo "A média entre $n1 e $n2 é " . number_format($media, 2);
    echo "O aluno está " . (($media > 7) ? "APROVADO" : "REPROVADO");
  ?>
</body>

</html>
