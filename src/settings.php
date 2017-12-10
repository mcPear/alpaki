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
<?php include ("common/header.php");?>

<div >
    <a href="?css=<?php echo $lagooncss;?>">Lagoon</a>
    <a href="?css=<?php echo $darkcss;?>">Dark</a>
    <a href="?css=<?php echo $default;?>">Default</a>
</div>

<?php include ("common/footer.php");?>
</body>
</html>