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
    // Testar com a URL http://localhost/php/ex004/?x=9&y=-3
    $x = $_GET["x"]; // "a" é pego dos parâmetros da URL
    $y = $_GET["y"]; // "b" é pego dos parâmetros da URL
    $z = &$x;

    echo "O valor de X é " . $x;
    echo "<br/> O valor de Y é " . $y;
    echo "<br/> O valor de Z aponta para X utilizando o operador '&\$x' e seu valor é " . $z;
    echo "<br/>";
    echo "<br/>Tipos de atribuição:";
    echo "<br/>--\$x | pré-decremento";
    echo "<br/>++\$x | pré-incremento";
    echo "<br/>\$x-- | pós-decremento";
    echo "<br/>\$x++ | pós-incremento";
    echo "<br/>\$x += \$y | soma em X o valor de Y";
    echo "<br/>\$x -= \$y | subtrai em X o valor de Y";
    echo "<br/>\$x *= \$y | multiplica X pelo valor de Y";
    echo "<br/>\$x /= \$y | divide X pelo valor de Y";
    echo "<br/>\$x .= \$y | concatena X com Y";
  ?>
</body>

</html>
