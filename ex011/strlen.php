<?php
  $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea impedit iusto dicta eos. Explicabo nesciunt aspernatur, placeat facere, optio voluptate autem quos sint quas molestiae dolorum aliquam incidunt quasi?";
  $tamanho = strlen($texto);
  // strlen() conta quantos caracteres uma determinada string possui

  $wrap = wordwrap($texto, 40, "<br>\n", false);
  echo $wrap;
  echo "<br>";
  echo "<br>O tamanho do texto é de $tamanho caracteres.";
?>
