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

<div>
    <h2>O firmie</h2>
    <h4>Firma Polskie Alpaki&trade; została założona w 2017 roku we Wrocławiu przez <i>Adama i
        Annę Kowalskich</i>.</h4>
    <p style="text-align: center">Od tego czasu prężnie propagujemy hodowlę alpak w Polsce.<br>
        Pierwszą aplakę zakupiliśmy na targu w Niemczech za niesepełna 50&euro;<br>
        Obecnie rozwijamy hodowlę i posiadamy 15 alpak</p>
</div>
<img class="center img-rounded" src="../res/image/hodowla.jpg" alt="Hodowla" height="600" width="1000">


<?php include ("common/footer.php");?>
</body>
</html>