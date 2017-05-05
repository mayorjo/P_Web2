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
    <?php
        if(isset($_SESSION["connection"])) {
    ?>
        <li class="hello">Compte de <?php echo $_SESSION["username"] ?></li>
        <li class="hello">Compte de <?php echo $_SESSION["username"] ?></li>
    <?php
        }
    ?>
</section>
<footer class="page-footer grey darken-4">
    <?php
        include("include/Footer.php")
    ?>
</footer>
</body>
</html>