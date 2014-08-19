<?php
session_start();

// on inclu la page de config
include("./config.php");

if(!isset($_SESSION['_login']) || !isset($_SESSION['_pass']))
{
    // si on ne détecte aucune sessions, c'est que cette personne n'est pas connecté
    // on affiche le formulaire de connexion
    echo '<p><b style="color:red">espace sécurisé</b><br />Connecté vous pour accéder à cette page</p>';
    include("./form.html");
    exit();
}
else
{
    // les sessions existe ... reste à savoir si les informations sont correct ou non
    if(($_admin_login != $_SESSION['_login']) || ($_SESSION['_pass'] != $_admin_pass))
    {
        echo '<p><b style="color:red">Votre connexion ne semble pas valide</b></p>';
        include("form.html");
        exit();
    }
}
?>