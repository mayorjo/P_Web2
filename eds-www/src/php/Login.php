<!DOCTYPE html>
<?php
/**
 * ETML
 * Auteur: Jimmy Lopez
 * Date: 03.03.2017
 * Description:
 */
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CIF - Inscription</title>

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
    <h1 class="loginTitle">Identifiants</h1>
    <div class="row">
        <form class="col s12" action = "connect.php" method = "post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="login" type="text" class="validate">
                    <label name="login" for="login">Pseudo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label name="password" for="password">Mot de passe</label>
                </div>
            </div>
            <div class="soloBtn">
            <button class="btn waves-effect waves-light" type="submit" name="action">Connexion
            </button>
            </div>
        </form>
    </div>
</section>
<footer class="page-footer grey darken-4">
    <?php
    include("include/Footer.php")
    ?>
</footer>
</body>
</html>