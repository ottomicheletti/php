<?php
  class Pessoa {
    protected $nome, $idade, $sexo;

    public function __construct(string $nome, int $idade, string $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }

    function getNome() {
      return $this->nome;
    }

    function getSexo() {
      return $this->sexo;
    }

    function getIdade() {
      return $this->idade;
    }

    function fazerAniver() {
      $this->idade = $this->getIdade() + 1;
    }
  }
?>
