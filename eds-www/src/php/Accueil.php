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
            <h1 class="titre">Site de CIFs</h1>
            <p>Ce site à été créé dans le but de vous donner des idées d'activitées quand vous ne savez plus comment vous occuper.
                       De nombreuses idées publiées par nos modérateurs ou d'autres internautes sont à votre disposition.</p>
            <p>Chaque CIF peut être notée par les lecteurs, elles sont ainsi évaluées afin de déterminer si nombreux sont ceux qui ont apprécié la CIF en question.</p>
            <p>Vous pouvez également vous créer un compte, ce qui vous permet de lister vos CIFs préférés ainsi que d'en publier pour que tout le monde puisse profiter de vos bonnes idées (ou pas...).</p>
        </div>

    </section>
    <footer class="page-footer grey darken-4">
        <?php
        include("include/Footer.php")
        ?>
    </footer>
</body>
</html>