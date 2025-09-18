<!-- Job 01 : Formulaire GET -->
<form method="get">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="ville" placeholder="Ville">
  <input type="submit" value="Envoyer">
</form>
<?php
// Job 01 : Afficher le nombre d’arguments GET
if (isset($_GET)) {
    $compteur = 0;
    foreach ($_GET as $arg => $val) {
        $compteur++;
    }
    echo "Le nombre d’argument GET envoyé est : $compteur";
}
?>