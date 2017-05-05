<!DOCTYPE html>
<?php
/**
 * ETML
 * Auteur: Jimmy Lopez
 * Date: 03.02.2017
 * Description:
 */
?>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<?php
    if (isset($_SESSION['connect']))
    {
        ?><li><a href="MyAccount.php">Mon compte</a></li><?php
        ?><li><a href="LogOut.php">Déconnexion</a></li><?php
    }
    else
    {
        ?><li><a href="Login.php">Connexion</a></li><?php
        ?><li><a href="SignIn.php">S'inscrire</a></li><?php
    }
?>
    <li class="divider"></li>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
</ul>
<nav>
    <div class="nav-wrapper grey darken-4">
        <a href="Accueil.html"><img src="../../resources/images/logo.png" alt="logo" width="110" height="61"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="Accueil.php">Accueil</a></li>
            <li><a href="AddCIF.php">Ajouter une CIF</a></li>
            <li><a href="CIFs.php">Les CIFs</a></li>
            <li><a href="Evaluer.php">Évaluer</a></li>

            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Profil<i class="material-icons right">perm_identity</i></a></li>
        </ul>
    </div>
</nav>
