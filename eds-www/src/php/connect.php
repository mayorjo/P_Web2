<?php
/**
 * ETML
 * Auteur: Jimmy Lopez
 * Date: 27.02.2017
 * Description:
 */
session_start();

$login1 = file_get_contents('text.txt',NULL ,NULL,0,12);
$password1 = password_hash(file_get_contents('./text.txt',NULL ,NULL,13,5),PASSWORD_DEFAULT);

$login2 = file_get_contents('text.txt',NULL ,NULL,20,13);
$password2 = password_hash(file_get_contents('./text.txt',NULL ,NULL,34,5),PASSWORD_DEFAULT);

$loginSet = $_POST['login'];
$passwordSet = $_POST['password'];

if($login1 == $loginSet && password_verify($passwordSet,$password1))
    {
        echo 'La connexion est active';
        $_SESSION['connect'] = 'connected';
    }

elseif($login2 == $loginSet && password_verify($passwordSet,$password2))
{
    echo 'La connexion est active';
    $_SESSION['connect'] = 'connected';
}

else
{
    echo "Aucune permission de visualiser cette page sans être connecté";
}
