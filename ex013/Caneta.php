<?php
  class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
      if($this->tampada == false) {
        echo "<p>Estou rabiscando...</p>";
        $this-> carga -= 1;
      } else {
        echo "<p>Não posso rabiscar, estou tampada!</p>";
      }
    }

    function tampar() {
      $this->tampada = true;
      echo "<p>Fui destampada.</p>";
    }

    function destampar() {
      $this->tampada = false;
      echo "<p>Fui tampada.</p>";
    }
  }
?>
