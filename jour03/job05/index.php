<!-- Job 05 : Compter voyelles et consonnes -->
<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array(
    "voyelles" => 0,
    "consonnes" => 0
);

//voyelles et consonnes
$voyelles = "aeiouyAEIOUY";
$consonnes = "bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";

// la chaîne caractère par caractère
for ($i = 0; isset($str[$i]); $i++) {
    $car = $str[$i];
    // Vérifier si le caractère est une voyelle
    for ($v = 0; isset($voyelles[$v]); $v++) {
        if ($car === $voyelles[$v]) {
            $dic["voyelles"]++;
        }
    }
    // Vérifier si le caractère est une consonne
    for ($c = 0; isset($consonnes[$c]); $c++) {
        if ($car === $consonnes[$c]) {
            $dic["consonnes"]++;
        }
    }
}

//  Afficher le résultat dans un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>".$dic["voyelles"]."</td><td>".$dic["consonnes"]."</td></tr></tbody>";
echo "</table>";
?>