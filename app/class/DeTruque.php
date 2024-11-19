<?php

require_once 'De.php';

readonly class DeTruque extends De{

  public function lancer() : int {
    return rand($this->nbDeFace - 2, $this->nbDeFace);
  }
}