<?php
  $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tempore nisi praesentium ex beatae velit illum, maiores doloribus quia iure sed quisquam officiis in similique adipisci fugiat optio iusto sapiente.";

  $wrap = wordwrap($texto, 20, "<br>\n", false);
  /* Quebra o texto passado no 1º argumento,
  a cada 20 caracteres informados pelo 2º argumento,
  o 3º argumento executa a quebra de linha tanto no arquivo HTML gerado pelo PHP,
  quanto no que é mostrado na tela. Já o 4º argumento, quando é false, quebra o texto por palavras mesmo que passe ou falte caracteres. Se for true, quebra a palavra na contagem exata de caracteres independente da regra gramatical. */

  echo $wrap;
?>
