<?php
// Affiche un rectangle largeur 20, hauteur 10

$largeur = 20;
$hauteur = 10;

for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        echo "*";
    }
    echo "<br />";
}
?>