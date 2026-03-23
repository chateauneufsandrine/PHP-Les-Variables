<?php
// EXERCICE8////////////////////////////////////////////////////////////////////
// // Créer 3 variables.
// Dans la première mettre le résultat de l'opération 3 + 4.
// Dans la deuxième mettre le résultat de l'opération 5 * 20.
// Dans la troisième mettre le résultat de l'opération 45 / 5.
// Afficher le contenu des variables.

function additionner($nombre1, $nombre2) {
    return $nombre1 + $nombre2;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= additionner(20, 8)?>
</body>
</html>