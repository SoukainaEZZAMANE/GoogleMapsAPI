<?php
$salt = 'BwGk15l8WX'; // $salt permet d'avoir un mot de passe plus sécurisé
$_admin_pass = md5('motdepasse'.$salt); // on crypt pour pouvoir comparer - plus sécurisé
$_admin_login = 'login';
?>