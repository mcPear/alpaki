<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Praca</title>
    <meta name="description" content="Strona dla osób zainteresowanych pracą w firmie">
    <meta name="keywords" content="praca, gospodarstwo, hodowla, weterynaria, opieka">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>

<!--navbar-->
<nav>
    <ul class="main-navigation">
        <li style="float: left">
            <p style="margin: 0;padding: 0">
                <a href="./index.html">
                    <img src="../res/image/logo2.png" alt="logo" width="45" height="45">
                    <span style="font-size: xx-large;font-style: oblique;font-variant: small-caps; color: black;font-weight: 400">Polskie Alpaki&trade;</span>
                </a>
            </p>
        </li>
        <li><a style="padding: 35px" href="./about.html">O firmie</a></li>
        <li><a style="padding: 35px" href="./fun.html">Rozrywka</a></li>
        <li><a style="padding: 35px" href="./contact.html">Kontakt</a></li>
        <li><a style="padding: 35px" href="./alpacas.html">Alpaki</a></li>
        <li><a style="padding: 35px" href="#">Dzialalnosc</a>
            <ul>
                <li><a href="./job.html">Praca</a></li>
                <li><a href="./companies.html">Dla firm</a></li>
                <li><a href="./trade.html">Handel</a></li>
            </ul>
        </li>
    </ul>
</nav>

<?php

if (!preg_match("/@/", $_POST["email"])) {
    print("<div style='text-align: center'>");
    print("<h2>Błędny adres email</h2>");
    print("<p>Proszę podać prawidłowy adres email, zawierający znak @</p>");
    print("</div>");
    die();
}
?>
<div style="text-align: center">
    <h2>Witaj <?php print($_POST["firstName"]) ?></h2>
    <p>Dziękujemy za twoje zgłoszenie. Oto dane które podałeś :</p>
    <p>Imie: <strong><?php
            if(isset($_POST["firstName"])) {
                print($_POST["firstName"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p>Nazwisko: <strong><?php
            if(isset($_POST["lastName"])) {
                print($_POST["lastName"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p>Email: <strong><?php print($_POST["email"]) ?></strong></p>
    <p>Treść: <strong><?php
            if(isset($_POST["content"])) {
                print($_POST["content"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p style="margin-top: 3em"><?php print($_SERVER["HTTP_USER_AGENT"]) ?></p>
</div>

<footer>
    <p>Copyright 2017</p>
</footer>
</body>
</html>
