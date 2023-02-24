<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Getter e Setter</title>
</head>

<body>
  <pre>
    <?php
      require_once "./Caneta.php";

      $caneta1 = new Caneta("Pentel", 0.7);
      print_r($caneta1);

      echo $caneta1->getModelo();
      echo $caneta1->getPonta();

      echo "<br>";

      $caneta1->setModelo("Montblanc");
      print_r($caneta1);

      echo "<br>";

      $caneta2 = new Caneta("BIC");
      print_r($caneta2);

      echo $caneta2->getModelo();
      echo $caneta2->getPonta();
    ?>
  </pre>
</body>

</html>
