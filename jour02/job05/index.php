<?php
// Affiche les nombres premiers jusqu'à 1000

for ($i = 2; $i <= 1000; $i++) {
    $isPrime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $i . "<br />";
    }
}
?>