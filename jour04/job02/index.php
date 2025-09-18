<!-- Job 02 : Formulaire GET -->
<form method="get">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="ville" placeholder="Ville">
  <input type="submit" value="Envoyer">
</form>
<?php
// Job 02 : Afficher les arguments GET dans un tableau HTML
if (isset($_GET)) {
    echo "<table border='1'><tr><th>Argument</th><th>Valeur</th></tr>";
    foreach ($_GET as $arg => $val) {
        echo "<tr><td>$arg</td><td>$val</td></tr>";
    }
    echo "</table>";
}
?>