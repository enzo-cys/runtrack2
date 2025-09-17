<?php
// Job 01 : Afficher si chaque nombre du tableau est pair ou impair

$numbers = [200, 204, 173, 98, 171, 404, 459];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " est paire<br/>";
    } else {
        echo $number . " est impaire<br/>";
    }
}
?>