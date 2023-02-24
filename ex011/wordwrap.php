<?php
  $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tempore nisi praesentium ex beatae velit illum, maiores doloribus quia iure sed quisquam officiis in similique adipisci fugiat optio iusto sapiente.";

  $wrap = wordwrap($texto, 20, "<br>\n");
  /* Quebra o texto passado no 1º argumento,
  a cada 20 caracteres informados pelo 2º argumento
  e executa a quebra de linha tanto no arquivo HTML gerado pelo PHP,
  quanto no que é mostrado na tela */

  echo $wrap;
?>
