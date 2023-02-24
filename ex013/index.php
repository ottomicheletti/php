<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes e Objetos</title>
</head>
<body>
  <?php
    require_once "./Caneta.php";

    $caneta1 = new Caneta;
    $caneta1->cor = "Azul";
    $caneta1->modelo = "BIC Cristal";

    // Tenta a ação de rabiscar:
    $caneta1->rabiscar();

    // Destampar a caneta:
    $caneta1->destampar();

    // Tentar rabiscar novamente:
    $caneta1->rabiscar();
    $caneta1->rabiscar();
    $caneta1->rabiscar();
    $caneta1->rabiscar();

    // Status da caneta1:
    print_r($caneta1);

    $caneta2 = new Caneta;
    $caneta2->cor = "Vermelha";

    // Destampar a caneta:
    $caneta2->destampar();

    // Tenta a ação de rabiscar:
    $caneta2->rabiscar();

    print_r($caneta2);
  ?>
</body>
</html>
