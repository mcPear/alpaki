<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["password"]);
unset($_SESSION["valid"]);

header('Refresh: 0; URL = login.php');
?>