<!-- Job 04 : Formulaire POST -->
<form method="post">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="ville" placeholder="Ville">
  <input type="submit" value="Envoyer">
</form>
<?php
// Job 04 : Afficher les arguments POST dans un tableau HTML
if (isset($_POST)) {
    echo "<table border='1'><tr><th>Argument</th><th>Valeur</th></tr>";
    foreach ($_POST as $arg => $val) {
        echo "<tr><td>$arg</td><td>$val</td></tr>";
    }
    echo "</table>";
}
?>