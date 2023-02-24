<?php
  class Caneta {
    // Atributos protegidos:
    protected string $modelo ;
    protected float $ponta;

    /* Constructor para receber os dados de modelo e ponta, sendo que só o modelo é obrigatório.
    A ponta caso não seja informada, usará o valor default 0.5. */
    public function __construct(string $modelo, float $ponta = 0.5) {
      $this->modelo = $modelo;
      $this->ponta = $ponta;
    }

    // Função getter para consultar o modelo:
    public function getModelo() {
      echo "$this->modelo<br>";
    }

    // Função setter para alterar o modelo:
    public function setModelo(string $m) {
      $this->modelo = $m;
    }

    public function getPonta() {
      echo "$this->ponta<br>";
    }

    public function setPonta(float $p) {
      $this->ponta = $p;
    }
  }
?>
