<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotinas com Parâmetros Dinâmicos</title>
</head>

<body>
  <?php
    function soma () {
      $params = func_get_args();
      $params_length = func_num_args();

      $resultado = 0;

      foreach ($params as $valor) {
        $resultado += $valor;
      }

      return [$resultado, $params_length];
    }

    $a = soma(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $b = soma(10, 20, 30, 40, 50);
    $c = soma(-23, 57, 999, -34, 765, -877);

    echo "\$a tem " . $a[1] . " parâmetros e o resultado da soma é " . $a[0] . "<br/>";
    echo "\$b tem " . $b[1] . " parâmetros e o resultado da soma é " . $b[0] . "<br/>";
    echo "\$c tem " . $c[1] . " parâmetros e o resultado da soma é " . $c[0] . "<br/>";
  ?>
</body>

</html>
