<?php 
///////EXERCICE4 ///////////////////////////////////////////////////////////////////////////
// Créer une variable de type string, une variable de type int, une variable de type float, 
// une variable de type booléan et les initialiser avec une valeur de votre choix.
// Les afficher.
$string = "Wello World !";
$int = 10;
$float = 38.7;
$isRecording = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      EXERCICE4
    <h1>
        <ul><?= $string ?></ul>
        <ul><?= $int ?></ul>
        <ul><?= $float  ?></ul>
        <ul><?= $isRecording ?></ul>
    </h1>

</body>
</html>