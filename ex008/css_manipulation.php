<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    $text = isset($_POST["word"]) ? $_POST["word"] : "[não informado]";
    $color = isset($_POST["color"]) ? $_POST["color"] : "#000";
    $size = isset($_POST["size"]) ? $_POST["size"] . "pt" : "20pt";
    $decoration = isset($_POST["decoration"]) ? $_POST["decoration"] : "none";
  ?>
  <style>
    span.text {
      text-decoration-line: <?php echo $decoration ?>;
      font-size: <?php echo $size ?>;
      color: <?php echo $color ?>;
    }
  </style>
  <title>Resultado</title>
</head>
<body>
  <?php
    echo "<span class='text'>$text</span>";
  ?>
  <a href="./index.html">Voltar</a>
</body>
</html>
