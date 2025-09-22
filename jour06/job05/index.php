<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec styles dynamiques</title>
    <?php
    // On commence avec le style numéro 1 par défaut 
    $style = "style1";

    //quelqu’un a appuyé sur le bouton du formulaire
    if (isset($_POST['style'])) {
        $style = $_POST['style'];
    }

    if ($style !== "style1" && $style !== "style2" && $style !== "style3") {
        $style = "style1";
    }
    ?>
    <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>
    <form method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if ($style=="style1") echo "selected"; ?>>Style 1</option>
            <option value="style2" <?php if ($style=="style2") echo "selected"; ?>>Style 2</option>
            <option value="style3" <?php if ($style=="style3") echo "selected"; ?>>Style 3</option>
        </select>
        <button type="submit">Valider</button> <!-- Quand on clique, le style change  -->
    </form>

    <!-- texte Lorem Ipsum -->
    <div class="lorem">
        <h2>Lorem Ipsum</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Nulla facilisi. Pellentesque euismod, sem at commodo cursus, 
         tellus justo aliquet sapien, sed dictum orci nisi a erat. 
         Sed in cursus enim, ut dictum tortor. 
         Mauris non dolor nec dui tincidunt euismod.
        </p>
    </div>
</body>
</html>