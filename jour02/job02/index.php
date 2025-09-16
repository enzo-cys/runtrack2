<?php
// Affiche les nombres de 0 à 1337 sauf 26, 37, 88, 1111 et 3233

for ($i = 0; $i <= 1337; $i++) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        // Ne rien faire
    } else {
        echo $i . "<br />";
    }
}
?>