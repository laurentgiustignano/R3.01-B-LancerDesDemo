<?php
$title = "Demo Lancer de dés";
require 'header.php';
require_once '../app/class/De.php';

$tailleDe = 12;
$de = new De($tailleDe);
$valeurLancer = $de->lancer();

echo <<<HTML
  <h1>$title</h1>
  <p>J'obtiens $valeurLancer sur mon lancer de dé à $tailleDe faces.</p>
HTML;

require 'footer.php';
