<?php
// Job 05 : Compter voyelles et consonnes et afficher dans un tableau HTML

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["voyelles" => 0, "consonnes" => 0];
$voyelles = "aeiouyAEIOUY";
$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    // Vérifier si c'est une lettre
    if (
        ($char >= "a" && $char <= "z") ||
        ($char >= "A" && $char <= "Z") ||
        $char == "é" || $char == "è" || $char == "ê" || $char == "ë" ||
        $char == "à" || $char == "â" || $char == "ä" ||
        $char == "ù" || $char == "û" || $char == "ü" ||
        $char == "ô" || $char == "ö" || $char == "î" || $char == "ï"
    ) {
        $j = 0;
        $isVoyelle = false;
        while (isset($voyelles[$j])) {
            if (strtolower($char) == strtolower($voyelles[$j])) {
                $isVoyelle = true;
            }
            $j++;
        }
        if ($isVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    $i++;
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $dic["voyelles"]; ?></td>
            <td><?= $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>