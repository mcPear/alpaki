<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Skontaktuj się z nami</title>
    <meta name="description" content="Formularz umożliwiający kontakt z firmą">
    <meta name="keywords" content="kontakt, email">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
</head>
<style type="text/css">
    label{
        width: 5em;
        float: left;
    }
    div{
        margin-bottom: 2em;
    }
</style>
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
        <li><a style="padding: 35px" href="./settings.php">Ustawienia</a></li>
                <li><a style="padding: 35px" href="./about.php">O firmie</a></li>
                <li><a style="padding: 35px" href="./fun.php">Rozrywka</a></li>
                <li><a style="padding: 35px" href="./contact.php">Kontakt</a></li>
                <li><a style="padding: 35px" href="alpacas.php">Alpaki</a></li>
                <li><a style="padding: 35px" href="#">Dzialalnosc</a>
                    <ul>
                        <li><a href="./job.php">Praca</a></li>
                        <li><a href="./companies.php">Dla firm</a></li>
                        <li><a href="./trade.php">Handel</a></li>
                    </ul>
                </li>
    </ul>
</nav>

<!--contact form-->
<form action="/alpaki/src/validation.php" method="post" onsubmit="confirmSubmit()" onreset="resetForm()">
    <h2 style="text-align: center">Skontaktuj się z nami</h2>
    <div style="width: 400px;margin:0 auto;">
        <div id="firstNameDiv">
            <label>Imię :</label>
            <input id="firstName" type="text" name="firstName" size="40">
        </div>
        <div id="lastNameDiv">
            <label>Nazwisko :</label>
            <input id="lastName" type="text" name="lastName" size="40">
        </div>
        <div id="emailDiv">
            <label>Email :</label>
            <input id="email" type="email" name="email" size="40">
        </div>
        <div id="contentDiv">
            <label>Treść :</label>
            <textarea id="content" name="content" rows="4" cols="40" maxlength="200"></textarea>
        </div>
        <div style="text-align: center">
            <input id="contactSubmit" type="submit" value="Wyslij">
            <input type="reset" value="Wyczyść">
        </div>
    </div>
</form>

<h2 style="text-align: center">Możesz też kliknąć tu</h2>
<div style="text-align:center">
    <a style="text-align: center" href="mailto:alpaki@gmail.com?Subject=Pytanie%20klienta">e-mail</a>
</div>

<footer>
    <p>Copyright 2017</p>
</footer>

<script src="../scripts/contactFormTooltips.js" language=javascript type="text/javascript"></script>

<script src="../scripts/contactFormSubmitReset.js" language=javascript type="text/javascript"></script>

</body>
</html>