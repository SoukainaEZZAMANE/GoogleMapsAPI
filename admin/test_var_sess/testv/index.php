<?php
include('./verif.php'); // si la v�rification est ok : on aura acc�s au reste de la page.

echo '
<p>
    <b>Bonjour</b><br />
    Vous est connect� en tant que <b>'.$_SESSION['_login'].'</b>
</p>';
?>