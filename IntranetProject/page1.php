<?php
if (isset($_GET["id"])) {
    echo "Vous avez interrompu votre lecture. A bientôt...";
    exit();
}
else {
    echo $_GET["id"];
}