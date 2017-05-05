<!DOCTYPE html>
<?php
/**
 * ETML
 * Auteur: Jimmy Lopez
 * Date: 27.01.2017
 * Description:
 */
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CIF - Accueil</title>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Charge le css de base -->
    <link type="text/css" rel="stylesheet" href="../../resources/css/default.css" />

</head>
<body>
<header>
    <?php
    include("include/Header.php")
    ?>
</header>
<section>
    <div class="container">
        <h1 class="titre"> Contenu réservé aux membres </h1>
        <p>Ce contenu est accessible pour les utilisateurs qui sont connectés avec leur compte. Veuillez vous connecter ou inscrivez vous si vous n'avez pas de compte.</p>
    </div>
    <div class="doubleBtn">
        <button class="btn waves-effect waves-light" type="submit" name="action">S'inscrire</button>
        <button class="btn waves-effect waves-light" type="submit" name="action">Connexion</button>
    </div>
</section>
<footer class="page-footer grey darken-4">
    <?php
    include("include/Footer.php")
    ?>
</footer>
</body>
</html><?php
