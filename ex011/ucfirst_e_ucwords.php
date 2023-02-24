<?php
  $texto = "otto micheletti";
  $texto2 = ucfirst($texto);
  // Apenas o primeiro caractere da string é convertido de minúsculo para maiúsculo.

  $texto3 = ucwords($texto);
  // Converte o primeiro caractere de cada palavra de minúsculo para maiúsculo.

  echo "O texto era $texto e depois de ucfirst() é $texto2.<br>";
  echo "O texto era $texto e depois de ucwords() é $texto3.<br>";
?>
