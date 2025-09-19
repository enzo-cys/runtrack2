<!-- Job 03 : Formulaire POST -->
<form method="post">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="ville" placeholder="Ville">
  <input type="submit" value="Envoyer">
</form>
<?php
// Job 03 : Afficher le nombre d’arguments POST
if (isset($_POST)) {
    $compteur = 0;
    foreach ($_POST as $arg => $val) {
        $compteur++;
    }
    echo "Le nombre d'argument POST envoyé est : $compteur";
}
?>