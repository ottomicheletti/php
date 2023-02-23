<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos</title>
</head>

<body>
  <?php
    // Testar com a URL http://localhost/php/ex004/?x=9&y=-3
    $x = $_GET["x"]; // "x" é pego dos parâmetros da URL
    $y = $_GET["y"]; // "y" é pego dos parâmetros da URL

    echo "<h2>Valores recebidos: $x e $y</h2>";
    echo "O valor absoluto de $y é " . abs($y);
    echo "<br/>O valor de $x<sup>2</sup> é " . pow($x, 2);
    echo "<br/>A raiz de $x é " . sqrt($x);
    echo "<br/>O valor arredondado de $x/2 é " . round(($x/2)); // ceil e floor são outras opções de arredondamento
    echo "<br/>A parte inteira de $x/2 é " . intval(($x/2));
    echo "<br/>O valor de $x em moeda é R$" . number_format($x, 2, ",");
  ?>
</body>

</html>
