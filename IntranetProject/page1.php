<?php
if (isset($_GET["id"])) {
    echo "Vous avez interrompu votre lecture. A bient�t...";
    exit();
}
else {
    echo $_GET["id"];
}