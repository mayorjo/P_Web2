<!DOCTYPE html>
<?php
/**
 * ETML
 * Auteur: Jimmy Lopez
 * Date: 17.02.2017
 * Description:
 */
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CIF - Nouvelle CIF</title>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Charge le css de base -->
    <link type="text/css" rel="stylesheet" href="../../resources/css/default.css"/>

</head>
<body>
<header>
    <?php
    include("include/Header.php")
    ?>
</header>
<section>
    <div class="container">
        <h1 class="titre">Ajouter une CIF</h1>

        <?php
        if (isset($_SESSION['connect']))
        {
            ?>
            <form method="post" action="traitement.php">
                <br>
                <div class="input-field col s12">
                    <input id="Nickname" type="text" class="validate">
                    <label for="Nickname">Titre de la CIF</label>
                </div>
                <br><br>
                <label class="subTitle">Catégorie:</label>
                <select class="browser-default">
                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <br>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" maxlength="254"></textarea>
                        <label class="subTitle" for="textarea1">Textarea</label>
                    </div>
                </div>
            </form>
            <br>
            <div class="publicBtn">
                <button class="btn waves-effect waves-light" type="submit" name="action">Publier
                </button>
            </div>
            <?php
        }
        else
        {
            ?>
            <table>
                <tr>
                    <td>
                        <img src="../../resources/images/Bonhomme.png" alt="logo" width="110" height="165" class="warningLogo"></a>
                    </td>
                    <td>
                        <p>Cette fonctionnalité est réservée aux utilisateurs connectés. Pour accèder à cette page, veuillez vous <a href="SignIn.php">inscrire</a> ou, si vous possèdez déjà un compte, vous pouvez vous <a href="Login.php">connecter</a>.</p>
                    </td>
                </tr>
            </table>
            <?php
        }
        ?>
    </div>
</section>
<footer class="page-footer grey darken-4">
    <?php
    include("include/Footer.php")
    ?>
</footer>
</body>
</html>