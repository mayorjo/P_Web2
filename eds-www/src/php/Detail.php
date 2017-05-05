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
    <title>CIF - Détail</title>

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
    include ("Header.php")
    ?>
</header>
<section>
    <?php
    //Variables
    $IdCif=$_GET['id'];

    //Connection BD
    include ("PDOLink.php");

    $bdd = new PDOLink();
    $req = $bdd->executeQuery('SELECT cifTitre,cifDescription, t_utilisateur.utiPseudo, t_categorie.catNom
                  FROM t_cif
                  INNER JOIN t_categorie ON t_cif.idCategorie = t_categorie.idCategorie
                  INNER JOIN t_utilisateur ON t_cif.idUtilisateur = t_utilisateur.idUtilisateur
                  WHERE idCif = ' . $IdCif);
    $result = $bdd->prepareData($req);

    foreach($result as $donnees) {
        ?>

        <h1>
            <?php echo $donnees["cifTitre"] ?>
        </h1>

        <p>
            <?php echo $donnees["catNom"] ?>
        </p>

        <p>
            <?php echo $donnees["cifDescription"] ?>
        </p>

        <p>
            <?php echo $donnees["utiPseudo"] ?>
        </p>
        <?php
    }
    $bdd->closeCursor($req)
    ?>
</section>
<footer class="page-footer grey darken-4">
    <?php
    include ("Footer.php")
    ?>
</footer>
</body>
</html>