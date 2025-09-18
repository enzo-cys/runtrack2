<!-- Job 06 : Formulaire GET nombre -->
<form method="get">
  <input type="text" name="nombre" placeholder="Entrez un nombre">
  <input type="submit" value="Vérifier">
</form>
<?php
// Job 06 : Parité du nombre
if (isset($_GET['nombre'])) {
    $valeur = $_GET['nombre'];
    if (($valeur % 2) == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}
?>