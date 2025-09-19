<?php
echo "<form method='post'>";
echo "Largeur: <input type='text' name='largeur' required>";
echo "Hauteur: <input type='text' name='hauteur' required>";
echo "<button type='submit'>Vérifier</button>";
echo "</form>";

if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    // Conversion manuelle de la largeur
    $largeur = 0;
    $l_str = $_POST['largeur'];
    $i = 0;
    while (isset($l_str[$i])) {
        $c = $l_str[$i];
        // Vérifier si c'est un chiffre
        if ($c >= '0' && $c <= '9') {
            // Conversion
            $digit = 0;
            if ($c == '1') $digit = 1;
            if ($c == '2') $digit = 2;
            if ($c == '3') $digit = 3;
            if ($c == '4') $digit = 4;
            if ($c == '5') $digit = 5;
            if ($c == '6') $digit = 6;
            if ($c == '7') $digit = 7;
            if ($c == '8') $digit = 8;
            if ($c == '9') $digit = 9;
            // '0' reste à 0
            $largeur = $largeur * 10 + $digit;
        }
        $i++;
    }

    // Conversion manuelle de la hauteur
    $hauteur = 0;
    $h_str = $_POST['hauteur'];
    $i = 0;
    while (isset($h_str[$i])) {
        $c = $h_str[$i];
        if ($c >= '0' && $c <= '9') {
            $digit = 0;
            if ($c == '1') $digit = 1;
            if ($c == '2') $digit = 2;
            if ($c == '3') $digit = 3;
            if ($c == '4') $digit = 4;
            if ($c == '5') $digit = 5;
            if ($c == '6') $digit = 6;
            if ($c == '7') $digit = 7;
            if ($c == '8') $digit = 8;
            if ($c == '9') $digit = 9;
            $hauteur = $hauteur * 10 + $digit;
        }
        $i++;
    }

    if ($largeur > 2 && $hauteur > 1) {
        $maison = "";

        // Toit
        $i = 0;
        while ($i < $hauteur) {
            // Espaces
            $j = 0;
            while ($j < $hauteur - $i - 1) {
                $maison .= " ";
                $j++;
            }
            $maison .= "/";
            // Underscores
            $underscores = $largeur - 2 * ($hauteur - $i - 1);
            if ($underscores < 1) $underscores = 1;
            if ($underscores > 1) {
                $k = 0;
                while ($k < $underscores - 2) {
                    $maison .= "_";
                    $k++;
                }
            }
            $maison .= "\\" . "\n";
            $i++;
        }

        // Corps de la maison
        $j = 0;
        while ($j < $hauteur) {
            if ($j == $hauteur - 1) {
                // Sol du carré
                $maison .= "|";
                $k = 0;
                while ($k < $largeur - 2) {
                    $maison .= "_";
                    $k++;
                }
                $maison .= "|\n";
            } else {
                // Mur du carré
                $maison .= "|";
                $k = 0;
                while ($k < $largeur - 2) {
                    $maison .= " ";
                    $k++;
                }
                $maison .= "|\n";
            }
            $j++;
        }

        echo "<pre>$maison</pre>";
    } else {
        echo "Veuillez entrer une largeur > 2 et une hauteur > 1.";
    }
}
?>