<?php
session_start();

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
<!DOCTYPE html>
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

<?php
if (isset($_SESSION["valid"]) && $_SESSION["valid"] == true) {
    echo("<div style=\"text-align: center\">
    <a href=\"?css=" . $lagooncss . "\">Lagoon</a>
    <a href=\"?css=" . $darkcss . "\">Dark</a>
    <a href=\"?css=" . $default . "\">Default</a>
</div>");
}
else{
    header('Refresh: 0; URL = login.php');
}
?>

<?php include ("common/footer.php");?>
</body>
</html>