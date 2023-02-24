<?php
  require_once "./IControlador.php";

  class ControleRemoto implements Controlador {
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    public function __construct(int $volume = 50, bool $ligado = false, bool $tocando = false ) {
      $this->volume = $volume;
      $this->ligado = $ligado;
      $this->tocando = $tocando;
    }

    private function getVolume() {
      return $this->volume;
    }

    private function getLigado() {
      return $this->ligado;
    }

    private function getTocando() {
      return $this->tocando;
    }

    private function setVolume(int $v) {
      $this->volume = $v;
    }

    private function setLigado(bool $l) {
      $this->ligado = $l;
    }

    private function setTocando(bool $t) {
      $this->tocando = $t;
    }

    public function ligar() {
      $this->setLigado(true);
    }

    public function desligar() {
      $this->setLigado(false);
    }

    public function maisVolume() {
      if ($this->getLigado() && $this->getVolume() < 100) {
        $this->setVolume($this->getVolume() + 1);
      }
    }

    public function menosVolume() {
      if ($this->getLigado() && $this->getVolume() > 1) {
        $this->setVolume($this->getVolume() - 1);
      }
    }

    public function ligarMudo() {
      if ($this->getLigado() && $this->getVolume() > 0) {
        $this->setVolume(0);
      }
    }

    public function desligarMudo() {
      if ($this->getLigado() && $this->getVolume() == 0) {
        $this->setVolume(50);
      }
    }

    public function play() {
      if ($this->getLigado() && $this->getTocando() == false) {
        $this->setTocando(true);
      }
    }

    public function pause() {
      if($this->getLigado() && $this->getTocando()) {
        $this->setTocando(false);
      }
    }

    public function abrirMenu() {

    }

    public function fecharMenu() {

    }
  }

?>
