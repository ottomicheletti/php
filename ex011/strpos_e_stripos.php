<?php
  $texto = "Estou aprendendo PHP";
  $posicao1 = strpos($texto, "PHP");
  // Busca "PHP" dentro do texto e retorna o índice no qual o primeiro P aparece.

  $posicao2 = stripos($texto, "php");
  // Mesmo retorno de strpos(), porém nessa versão, o 2ºargumento é case-insensitive.

  echo "strpos(): A posição de 'PHP' na frase '$texto', possui o indice de $posicao1.<br>";
  echo "stripos(): A posição de 'php' na frase '$texto', possui o indice de $posicao1.<br>";
?>
