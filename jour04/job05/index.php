<!-- Job 05 : Formulaire de connexion -->
<form method="post">
  <input type="text" name="username" placeholder="Nom d'utilisateur">
  <input type="password" name="password" placeholder="Mot de passe">
  <input type="submit" value="Connexion">
</form>
<?php
// Job 05 : Vérification des identifiants
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user === "John" && $pass === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar.";
    }
}
?>