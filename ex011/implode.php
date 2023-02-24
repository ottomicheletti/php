<?php
  $vetor[0] = "Curso";
  $vetor[1] = "em";
  $vetor[2] = "Vídeo";

  $implode = implode(" ", $vetor);
  $join = join(" ", $vetor);
  /* Concatena os valores de um array em uma string. O 1º argumento será o elemento de união dos valores.
  O join() é uma alternativa ao implode(). */

  echo "Feito com implode(): $implode.<br>";
  echo "Feito com join(): $join.";
?>
