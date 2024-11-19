<?php

readonly class De {

  public function __construct(private int $nbDeFace = 6) { }

  public function lancer(): int {
    return rand(1, $this->nbDeFace);
  }
}