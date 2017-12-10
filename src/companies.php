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
<?php include ("common/header.php");?>


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

<?php include ("common/footer.php");?>

</body>
</html>