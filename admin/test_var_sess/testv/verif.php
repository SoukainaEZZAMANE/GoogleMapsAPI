<?php
session_start();

// on inclu la page de config
include("./config.php");

if(!isset($_SESSION['_login']) || !isset($_SESSION['_pass']))
{
    // si on ne d�tecte aucune sessions, c'est que cette personne n'est pas connect�
    // on affiche le formulaire de connexion
    echo '<p><b style="color:red">espace s�curis�</b><br />Connect� vous pour acc�der � cette page</p>';
    include("./form.html");
    exit();
}
else
{
    // les sessions existe ... reste � savoir si les informations sont correct ou non
    if(($_admin_login != $_SESSION['_login']) || ($_SESSION['_pass'] != $_admin_pass))
    {
        echo '<p><b style="color:red">Votre connexion ne semble pas valide</b></p>';
        include("form.html");
        exit();
    }
}
?>