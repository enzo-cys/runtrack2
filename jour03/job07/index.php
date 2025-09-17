<?php
// Job 07 : Décaler les caractères vers la gauche, le dernier passe en premier

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";
$i = 0;
while (isset($str[$i])) {
    $i++;
}
// $i == longueur
$len = $i;
for ($j = 0; $j < $len; $j++) {
    if ($j == $len - 1) {
        $newStr .= $str[0];
    } else {
        $newStr .= $str[$j + 1];
    }
}
echo $newStr;
?>