<!-- Job 07 : Formulaire maison -->
<form method="get">
  <input type="text" name="largeur" placeholder="Largeur">
  <input type="text" name="hauteur" placeholder="Hauteur">
  <input type="submit" value="Construire la maison">
</form>
<pre>
<?php
// Job 07 : Afficher une maison en ASCII art
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur']; 
    $hauteur = $_GET['hauteur']; 
// Vérification des valeurs minimales
    if ($largeur < 3 || $hauteur < 2) {
        echo "Largeur minimum : 3, hauteur minimum : 2";
        exit;
    }
// Dessin de la maison
    for ($i = 0; $i < $largeur - 1; $i++) {
        for ($j = 0; $j < $largeur - $i - 1; $j++) echo " ";
        echo "/";
        for ($j = 0; $j < $i * 2; $j++) echo "-";
        echo "\\";
        echo "\n";
    }

  // Toit de la maison
    echo "/";
    for ($i = 0; $i < ($largeur - 1) * 2; $i++) echo "-";
    echo "\\";
    echo "\n";

   // Murs de la maison
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        for ($j = 0; $j < ($largeur - 1) * 2; $j++) echo " ";
        echo "|";
        echo "\n";
    }

    // Sol de la maison
    echo "|";
    for ($i = 0; $i < ($largeur - 1) * 2; $i++) echo "_";
    echo "|";
    echo "\n";
}
?>
</pre>