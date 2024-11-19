<?php
$title = "Demo Lancer de dés truqués";
require 'header.php';
require_once '../app/class/DeTruque.php';

$tailleDe = 12;
$de = new DeTruque($tailleDe);
$valeurLancer = $de->lancer();

echo <<<HTML
  <h1>$title</h1>
  <p>J'obtiens $valeurLancer sur mon lancer de dé truqué à $tailleDe faces.</p>
HTML;

require 'footer.php';
