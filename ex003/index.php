<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    // 0x = hexadecimal -> 0xA = A => 10 em decimal
    // 0b = binário -> 0b1010 = (1 * 2^3) + (0 * 2^2) + (1 * 2^1) + (0 * 2^0) => 10 em decimal
    // 0 = octal -> 0100 = (1 * 8^2) + (0 * 8^1) + (0 * 8^0) => 64 em decimal
    $hex = 0xA;
    $bin = 0b1010;
    $oct = 0100;

    echo "<p>HEX: $hex</p>";
    echo "<p>BIN: $bin</p>";
    echo "<p>OCT: $oct</p>";
  ?>
</body>

</html>
