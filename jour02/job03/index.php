<?php
// Affiche les nombres de 0 à 100
// 0 à 20 en italique, 25 à 50 soulignés, 42 remplacé par "La Plateforme_"

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br />";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo $i . "<br />";
    }
}
?>