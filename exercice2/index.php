<?php 
///////EXERCICE2 ///////////////////////////////////////////////////////////////////////////
//Créer trois variables lastname , firstname et age et les initialiser 
// avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.
$lastname = "Hildegarde";
$fistname = "De Bingen";
$age = 43;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     EXERCICE2
    <h2>
        <ul>Lastname : <?= $lastname ?></ul>
        <ul>Firstname :<?= $fistname ?> </ul>
        <ul>Age : <?= $age ?></ul>
    </h2>
</body>
</html>