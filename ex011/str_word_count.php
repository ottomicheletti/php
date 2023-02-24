<?php
  $texto = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi ullam non quidem eligendi commodi possimus repellendus culpa consequatur cumque velit, fugiat officiis sapiente facilis adipisci praesentium repudiandae, rem animi recusandae.";

  $quantidade = str_word_count($texto, 0);
  /* No 2º argumento dessa função, podemos colocar 0, 1 ou 2, onde:
  0: retorna apenas o número de palavras da string,
  1: gera um vetor que pode ser visualizado com printr(),
  2: gera um vetor onde é mostrado o indice de cada onde cada palavra começa */

  $wrap = wordwrap($texto, 40, "<br>\n", false);
  echo $wrap;
  echo "<br>";
  echo "<br>A quantidade de palavras do texto é de $quantidade palavras.";

?>
