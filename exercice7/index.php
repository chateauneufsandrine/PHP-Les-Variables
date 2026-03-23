<?php 
// <!-- //////Exercice7 ///////////////////////////////////////////////////////////////////////////////
// Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
// Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans". -->
$lastname = "Fragata";
$firstname = "Arthur";
$age = 30;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bonjour <?= $lastname ?> <?= $firstname ?>, tu as <?=  $age ?> ans.</h2>
</body>
</html>