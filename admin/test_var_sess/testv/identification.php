<?php
session_start(); // on initialise les sessions PHP

// on inclu la page de config
include("./config.php");

if($_POST && !empty($_POST['login']) && !empty($_POST['mdp']))
{
    // on crypt le mot de passe envoyer par le formulaire
    $password_md5 = md5($_POST['mdp'].$salt);

    if(($_admin_login == $_POST['login']) && ($password_md5 == $_admin_pass))
    {
        $_SESSION['_login'] = $_admin_login;
        $_SESSION['_pass'] = $password_md5;

        echo '<p style="color:green">Connexion réussi! </p>';
        echo '<p><a href="./index.php">Page admin</a></p>';
    }
    else
    {
        echo '<p style="color:red">Mauvais login ou mot de passe</p>';
        include("./form.html");
        exit();
    }
}
?>