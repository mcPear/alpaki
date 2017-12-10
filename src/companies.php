<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dla firm</title>
    <meta name="description" content="Strona poświęcona współpracy z firmami">
    <meta name="keywords" content="współpraca, dla, firm, korelacja, wsparcie">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
</head>
<style type="text/css">
    label {
        width: 8em;
        float: left;
    }

    div {
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


<h2 style="text-align: center">Strona umożliwiająca współpracę z firmami</h2>
<p style="text-align: center">Jeśli prowadzisz dobrze prosperującą firme i chcesz nawiązać z nami współpracę - wypełnij
    nasz formularz!</p>


<!--offer form-->
<form action="/action_page.php" autocomplete="on">
    <div style="width: 500px;display: block;margin-left: auto;margin-right: auto;" id="grad-bottom-right">
        <div style="margin-top: 2em">
            <label>Nazwa firmy:</label>
            <input type="text" name="name" size="40" autofocus>
        </div>
        <div>
            <label>Data powstania:</label>
            <input type="month" name="date" required>
        </div>
        <div style="margin-bottom: 4em">
            <label>Doświadczenie w hodowli zwierząt:</label>
            min<input type="range" name="experience" size="40">max
        </div>
        <div style="margin-bottom: 4em">
            <label>Tematyka firmy(tagi po przecinku):</label>
            <input type="search" name="tags" placeholder="gastronomia, dowóz" size="40" required>
        </div>
        <div>
            <label>Adres strony:</label>
            <input type="url" name="website" placeholder="http://www.przyklad.pl" size="40" required>
        </div>
        <div>
            <label>Kolor przewodni logo firmy:</label>
            <input type="color" name="color">
        </div>
        <div style="text-align: center">
            <input type="submit" style="margin-top: 2em">
        </div>
    </div>
</form>

<footer>
    <p>Copyright 2017</p>
</footer>

</body>
</html>