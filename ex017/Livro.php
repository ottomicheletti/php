<?php
  include_once "./Pessoa.php";
  include_once "./Publicacao.php";

  class Livro implements Publicacao {
    protected $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    public function __construct(string $titulo, string $autor, int $totPaginas, object $leitor) {
      $this->titulo = $titulo;
      $this->autor = $autor;
      $this->totPaginas = $totPaginas;
      $this->leitor = $leitor;
      $this->aberto = false;
      $this->pagAtual = 0;
    }

    public function detalhes() {
      echo "Livro " . $this->titulo . " escrito por " . $this->autor;
      echo "<br> Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
      echo "<br> Sendo lido por: " . $this->leitor->getNome() . "<br>";
      echo "<br>";
    }

    public function abrir() {
      $this->aberto = true;
      echo "<p>Livro aberto!</p>";
    }

    public function fechar() {
      $this->aberto = false;
    }

    public function folhear($pag) {
      if($pag > $this->totPaginas) {
        $this->pagAtual = 0;
      } else {
        $this->pagAtual = $pag;
      }
    }

    public function avancarPag() {
      $this->pagAtual += 1;
      echo "+1 página!<br>";
      echo "<br>";
    }

    public function voltarPag() {
      $this->pagAtual -= 1;
      echo "-1 página!<br>";
      echo "<br>";
    }
  }
?>
