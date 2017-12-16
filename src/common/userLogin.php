<?php

if (session_status() != PHP_SESSION_NONE && isset($_SESSION["valid"])) {
echo '<p class="login-info">Jesteś zalogowany jako '.$_SESSION["login"].'</p>';
}
else {
echo '<p class="login-info">Niezalogowany</p>';
}

?>
