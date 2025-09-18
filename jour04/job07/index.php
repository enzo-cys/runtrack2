<!-- Job 07 : Formulaire maison -->
<form method="get">
  <input type="text" name="largeur" placeholder="Largeur">
  <input type="text" name="hauteur" placeholder="Hauteur">
  <input type="submit" value="Construire la maison">
</form>
<?php
// Job 07 : Affichage de la maison
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];
    // Toit (triangle)
    for ($i = 0; $i < $largeur; $i++) {
        if ($i == 0) {
            for ($j = 0; $j < $largeur - 1; $j++) echo "&nbsp;";
            echo "*<br>";
        } else {
            for ($j = 0; $j < $largeur - $i - 1; $j++) echo "&nbsp;";
            echo "*";
            for ($j = 0; $j < ($i * 2 - 1); $j++) echo "&nbsp;";
            if ($i > 0) echo "*";
            echo "<br>";
        }
    }
    // Mur (rectangle)
    for ($i = 0; $i < $hauteur; $i++) {
        echo "*";
        for ($j = 0; $j < ($largeur * 2 - 3); $j++) echo "&nbsp;";
        echo "*<br>";
    }
}
?>