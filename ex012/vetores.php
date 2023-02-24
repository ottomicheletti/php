<?php
  // Formas de declarar um vetor:
  $a = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
  $b = [12, 34, 65, 1, 324, 15, 2, 3, 7, 32];

  // Criar um vetor pelo método range():
  $c = range(5, 20, 5);
  /* 1º argumento: valor inicial,
  2º argumento: valor final,
  3º argumento: step entre os valores. */

  // Criar um vetor de estrutura personalizada:
  $d = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");

  // Empurrar um novo valor para o final de um vetor existente:
  $a[] = 10;
  // Segunda opção:
  array_push($a, 11);

  // Remover último elemento de um vetor:
  array_pop($a);

  // Apagar o valor de uma posição específica do vetor:
  unset($a[5]);

  // Empurrar um novo valor para o começo de um vetor existente:
  array_unshift($a, 99);

  // Remover primeiro elemento de um vetor:
  array_shift($a);

  // Criar um vetor com chaves associativas:
  $e = array("nome" => "Otto", "idade" => 30, "peso" => 113 );
  /*
  Pode percorrer esse vetor com um loop foreach da seguinte forma:
    foreach($e as $chave => $valor) {
      echo "A chave $key possui o conteudo: $valor.<br>";
    }
  */

  // Ordernar um vetor:
  sort($b);

  // Ordenar um vetor de forma inversa:
  rsort($b);

  // Ordernar um vetor pelos valores sem trocar seus indices:
  asort($b);

  // Ordenar um vetor pelos valores sem trocar seus indices, porém de maneira reversa:
  arsort($b);

  // Ordenar um vetor pelas suas chaves:
  ksort($b);
?>
