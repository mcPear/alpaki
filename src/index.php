<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <meta name="description" content="Strona startowa firmy Polskie Alpaki">
    <meta name="keywords" content="start, firma, Polskie Alpaki">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
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

<!--image and info-->
<section id="3">
    <div style="margin-right: 5%">
        <p class="headText">Poznaj Alpaki już dziś!</p>
        <section id="3.1">
            <div style="float: right;margin-right: 100px">
                <h2>Nasze podopieczne</h2>
                <p>
                    <img class="img-rounded" src="../res/image/all1.jpg" alt="Hodowla" height="400" width="600">
                </p>
            </div>
    </div>
</section>
<section id="3.2">
    <div style="margin-top: 3.5em;width: 30%;margin-left: 5%">
        <h2>O naszej stronie</h2>
        <article>
            <header>
                <h3>Czego możesz się dowiedzieć?</h3>
            </header>
            <ul>
                <li>Zdobędziesz informacje na temat alpak oraz ich hodowli</li>
                <li>Zobaczysz przepiękne zdjęcia naszych podopiecznych</li>
                <li>Sprawdzisz oferty kupna i sprzedaży alpak</li>
                <li>Poznasz ciekawe oferty pracy</li>
            </ul>
        </article>
    </div>
</section>
</section>

<footer>
    <p>Copyright 2017</p>
</footer>

</body>
</html>