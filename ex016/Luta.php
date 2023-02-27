<?php
  require_once "./Lutador.php";

  class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($lutador1, $lutador2) {
      if ($lutador1->getCategoria() == $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
        $this->aprovada = true;
        $this->desafiado = $lutador1;
        $this->desafiante = $lutador2;
        echo "<p>Luta marcada entre " . $lutador1->getNome() . " e " . $lutador2->getNome() . "!</p>";
      } else {
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
        echo "<p>Luta não aprovada entre " . $lutador1->getNome() . " e " . $lutador2->getNome() . "!</p>";
      }
    }

    public function lutar() {
      if ($this->aprovada) {
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0, 2);
        switch ($vencedor) {
          case 0:
            echo "<p>Empate!</p>";
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();
            break;
          case 1:
            echo "<p>" . $this->desafiado->getNome() . " venceu!<p>";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
          case 2:
            echo "<p>" . $this->desafiante->getNome() . " venceu!<p>";
            $this->desafiado->perderLuta();
            $this->desafiante->ganharLuta();
            break;
        }
      } else {
        echo "<p>A luta não pode acontecer!</p><br>";
      }
    }
  }
?>
