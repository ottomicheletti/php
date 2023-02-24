<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Função</title>
</head>

<body>
  <?php
    function soma ($x, $y) {
      return $x + $y;
    }

    $a = 3;
    $b = 35;
    $resultado = soma($a, $b);
    echo "O resultado da soma entre $a e $b é $resultado";
  ?>
</body>

</html>
