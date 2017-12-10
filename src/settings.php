<!DOCTYPE html>
<?php

    $css = $default = 'style.css'; // define stylesheets
    $darkcss = 'dark.css';
    $lagooncss = 'lagoon.css';

    $expire = time()+60*60*24*30; // how long to remember css choice (60*60*24*30 = 30 days)



    if ( (isset($_GET['css'])) && ($_GET['css'] == $lagooncss) ) { // set cookie for light css
        setcookie('css', $_GET['css'], $expire);
        }

    if ( (isset($_GET['css'])) && ($_GET['css'] == $darkcss) ) { // set cookie for dark css
        setcookie('css', $_GET['css'], $expire);
        }

    if ( (isset($_GET['css'])) && ($_GET['css'] == $default) ) { // set cookie for default css
        setcookie('css', $_GET['css'], $expire);
        }

        function refreshPage(){
        $page = "./alpacas.php";
        $sec = "10";
        header("Refresh: $sec; url=$page");
        }

    $css = $_COOKIE['css'];

    ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>O firmie</title>
    <meta name="description" content="Informacje o firmie">
    <meta name="keywords" content="informacje, firma, Polskie Alpaki">
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

<div >
    <a href="?css=<?php echo $lagooncss;?>">Lagoon</a>
    <a href="?css=<?php echo $darkcss;?>">Dark</a>
    <a href="?css=<?php echo $default;?>">Default</a>
</div>

<footer>
    <p>Copyright 2017</p>
</footer>
</body>
</html>