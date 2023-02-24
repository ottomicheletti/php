<?php
  $texto = "   José da Silva   ";

  echo "O texto informado é: $texto e possui " . strlen($texto) . " caracteres antes de receber o trim().<br>";

  $resultado = trim($texto);
  /* Remove espaços no início e no final da string.
  Alternativas ao trim():
  ltrim() -> remove os espaços apenas do início da string.
  rtrim() -> remove os espaços apenas do final da string. */

  echo "O texto reformatado pelo trim() é: $resultado e agora possui " . strlen($resultado) . " caracteres."
?>
