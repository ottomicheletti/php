<?php
  class Caneta {
    public $modelo;
    public $cor;
    protected $carga = 100;
    protected $tampada = true;

    public function rabiscar() {
      if($this->tampada == false) {
        echo "<p>Estou rabiscando...</p>";
        $this-> carga -= 1;
      } else {
        echo "<p>Não posso rabiscar, estou tampada!</p>";
      }
    }

    public function tampar() {
      $this->tampada = true;
      echo "<p>Fui tampada.</p>";
    }

    public function destampar() {
      $this->tampada = false;
      echo "<p>Fui destampada.</p>";
    }
  }
?>
