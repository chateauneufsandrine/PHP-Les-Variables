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
function multiplier($nombre1, $nombre2)  {
     return $nombre1 * $nombre2;
}
function diviser($nombre1, $nombre2)  {
     return $nombre1 / $nombre2;
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
    <h1> addition : <?= additionner(20, 8)?></h1>
   <h1> multiplication : <?= multiplier(5, 20)?></h1>
 <h1> division :  <?= diviser(45, 5)?></h1>
</body>
</html>