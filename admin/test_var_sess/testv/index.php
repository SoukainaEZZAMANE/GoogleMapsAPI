<?php
include('./verif.php'); // si la vérification est ok : on aura accès au reste de la page.

echo '
<p>
    <b>Bonjour</b><br />
    Vous est connecté en tant que <b>'.$_SESSION['_login'].'</b>
</p>';
?>