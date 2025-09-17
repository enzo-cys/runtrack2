<?php
// Job 04 : Compter le nombre de caractères dans la chaîne

$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;
while (isset($str[$count])) {
    $count++;
}
echo "Nombre de caractères : " . $count;
?>