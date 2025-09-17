<?php
// Job 06 : Afficher la chaîne à l'envers

$str = "Les choses que l'on possède finissent par nous posséder.";
$reverse = "";
$i = 0;
while (isset($str[$i])) {
    $i++;
}
// $i est maintenant la longueur
$i--;
while ($i >= 0) {
    $reverse .= $str[$i];
    $i--;
}
echo $reverse;
?>