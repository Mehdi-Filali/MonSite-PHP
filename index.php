<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mon Site || Mehdi Aniq Filali</title>
</head>

<body>

    <h1>Mon site</h1>

<?php

if(!isset($_SESSION['id'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous

?>

    <a href="php/inscription">Inscription</a> <!-- Liens de nos futures pages -->
    <a href="php/connexion">Connexion</a>
    <a href="php/motdepasse">Mot de passe oublié</a>

<?php

}else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
?>

    <a href="php/profil">Mon profil</a>
    <a href="php/modifier-profil">Modifier mon profil</a>
    <a href="php/deconnexion">Déconnexion</a>
    <?php
}
?>

</body>

</html>