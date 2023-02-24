<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotina</title>
</head>

<body>
  <?php
    function soma ($x, $y) {
      $resultado = $x + $y;
      echo "O resultado da soma de $x e $y é " . $resultado . "<br/>";
    }

    soma(2, 2);
    soma(234, 43);
    soma(69, 42);
  ?>
</body>

</html>
