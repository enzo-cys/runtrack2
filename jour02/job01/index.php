<?php
// Affiche les nombres de 0 à 1337, avec 42 en gras et souligné

for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<b><u>$i</u></b><br />";
    } else {
        echo $i . "<br />";
    }
}
?>