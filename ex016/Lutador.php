<?php
  class Lutador {
    private string $nome, $nacionalidade, $categoria;
    private int $idade, $vitorias, $derrotas, $empates;
    private float $altura, $peso;

    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates) {
      $this->nome = $nome;
      $this->nacionalidade = $nacionalidade;
      $this->idade = $idade;
      $this->altura = $altura;
      $this->peso = $peso;
      $this->setCategoria();
      $this->vitorias = $vitorias;
      $this->derrotas = $derrotas;
      $this->empates = $empates;
    }

    public function getNome() {
      return $this->nome;
    }

    public function setNome(string $novoNome) {
      $this->nome = $novoNome;
    }

    public function getPeso() {
      return $this->peso;
    }

    public function setPeso(int $novoPeso) {
      $this->peso = $novoPeso;
      $this->setCategoria();
    }

    public function getCategoria() {
      return $this->categoria;
    }

    public function setCategoria() {
      switch (true) {
        case $this->peso < 52.2:
          $this->categoria = "Inválido";
          break;
        case $this->peso <= 70.3:
          $this->categoria = "Leve";
          break;
        case $this->peso <= 83.9:
          $this->categoria = "Médio";
          break;
        case $this->peso <= 120.2:
          $this->categoria = "Pesado";
          break;
        default:
          $this->categoria = "Inválido";
          break;
      }
    }

    public function setVitorias() {
      $this->vitorias += 1;
    }

    public function getVitorias() {
      return $this->vitorias;
    }

    public function setDerrotas() {
      $this->derrotas += 1;
    }

    public function getDerrotas() {
      return $this->derrotas;
    }

    public function setEmpates() {
      $this->empates += 1;
    }

    public function getEmpates() {
      return $this->empates;
    }

    public function getNacionalidade() {
      return $this->nacionalidade;
    }

    public function getIdade() {
      return $this->idade;
    }

    public function getAltura() {
      return $this->altura;
    }

    public function apresentar () {
      echo "Lutador: " . $this->getNome() . "<br>";
      echo "Origem: " . $this->getNacionalidade() . "<br>";
      echo $this->getIdade() . " anos<br>";
      echo $this->getAltura() . " m de altura<br>";
      echo "Pesando " . $this->getPeso() . "kg<br>";
      echo "Ganhou: " . $this->getVitorias() . "<br>";
      echo "Perdeu: " . $this->getDerrotas() . "<br>";
      echo "Empatou: " . $this->getEmpates() . "<br>";
    }

    public function status() {
      echo $this->getNome() . "<br>";
      echo "é um peso " . $this->getCategoria() . "<br>";
      echo "e no seu card possui:<br>";
      echo $this->getVitorias() . " vitórias<br>";
      echo $this->getDerrotas() . " derrotas<br>";
      echo $this->getEmpates() . " empates<br>";
    }

    public function ganharLuta() {
      $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
      $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
      $this->setEmpates($this->getEmpates() + 1);
    }
  }
?>
