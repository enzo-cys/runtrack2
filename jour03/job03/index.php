<?php
// Job 03 : Afficher uniquement les voyelles de la chaîne

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";
$result = "";

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    $j = 0;
    $isVoyelle = false;
    while (isset($voyelles[$j])) {
        if ($char == $voyelles[$j]) {
            $isVoyelle = true;
        }
        $j++;
    }
    if ($isVoyelle) {
        $result .= $char;
    }
    $i++;
}
echo $result;
?>