<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exercício prático em POO</title>
</head>
<body>
  <?php
    require_once "./Pessoa.php";
    require_once "./Livro.php";

    $pessoa[0] = new Pessoa("Pedro", 22, "M");
    $pessoa[1] = new Pessoa("Maria", 31, "F");

    $livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
    $livro[1] = new Livro("POO com PHP", "Maria de Souza", 500, $pessoa[0]);
    $livro[2] = new Livro("PHP Avançado", "Ana Paula", 800, $pessoa[1]);

    $livro[0]->abrir();
    $livro[0]->folhear(80);
    $livro[0]->detalhes();
    $livro[0]->avancarPag();
    $livro[0]->detalhes();
    $livro[0]->voltarPag();
    $livro[0]->voltarPag();
    $livro[0]->voltarPag();
    $livro[0]->voltarPag();
    $livro[0]->detalhes();
  ?>
</body>
</html>
