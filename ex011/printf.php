<?php
  $produto = "leite";
  $preco = 4.5;

  // %d -> valores decimais positivos ou negativos
  // %u -> valores decimais apenas positivos
  // %f -> valores reais (float)
  // %s -> string
  printf("O %s está custando R$ %.2f", $produto, $preco);
?>
