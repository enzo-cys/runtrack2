<?php
// Job 02 : Afficher un caractère sur deux de la chaîne

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$i = 0;
$result = "";
while (isset($str[$i])) {
    $result .= $str[$i];
    $i += 2;
}
echo $result;
?>