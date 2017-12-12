<?php session_start()?>
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
<?php include ("common/header.php");?>

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

<?php include ("common/footer.php");?>
</body>
</html>