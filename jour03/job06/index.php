<?php
$str = "Les choses que l'on possede finissent par nous posseder"; 

// Convertir la chaîne en tableau de caractères
$chars = str_split($str);

// Parcourir tableau envers et afficher chaque caractère
foreach (array_reverse($chars) as $char) {
    print $char;
}