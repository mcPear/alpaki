<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strefa rozrywki</title>
    <meta name="description" content="Strona poświęcona branżowej rozrywce">
    <meta name="keywords" content="rozrywka, śmieszne, alpaki">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
</head>
<body>

<!--navbar-->
<?php include ("common/header.php");?>

<section>
    <div class="rounded-shaded-border grad-bottom">
        <h2>Strefa rozrywki do pobrania</h2>
        <ul>
            <li>
                <a href="https://media.giphy.com/media/VNm9oziNiWm64/giphy.gif" content="fun" download>Szturm alpak</a>
            </li>
            <li>
                <a href="ftp://media.giphy.com/media/VNm9oziNiWm64/giphy.gif" content="fun" download>Szturm alpak
                    ftp</a>
            </li>
        </ul>
    </div>
</section>

<section>
    <div class="rounded-shaded-border grad-bottom">
        <h2>Ciekawostki</h2>
        <details>
            <summary>Alpaki mają trzy powieki</summary>
            <p>Trzecia powieka to tzw. migotka, która porusza się w poziomie</p>
        </details>
        <details>
            <summary>Alpaki są wykorzystywane w alpakoterapii</summary>
            <p>Zdaniem terapeutów kontakt z tymi zwierzętami pomaga w walce z nadciśnieniem, autyzmem czy depresją. Poza
                tym
                spędzanie czasu z alpaką ma pomóc dzieciom oswoić się ze zwierzętami i nauczyć, jak je traktować</p>
        </details>
        <details>
            <summary>Alpaki przypominają lamy</summary>
            <p>Są jednak od nich mniejsze i mają duża grubszą wełnę. Z wyglądu przypominają trochę przerośnięte owce z
                długimi szyjami albo żywe maskotki</p>
        </details>
        <aside style="position: relative;bottom: -3em;">
            <small>Podane informacje potwierdzone i akceptowalne w środowisku hodowców alpak</small>
        </aside>
    </div>
</section>

<div style="transform: rotate(-9deg);">
    <h1>Don't touch flying alpaca</h1>
    <h1>It will fly away</h1>
    <h1>Better try to move the standing one (try ctrl)</h1>
</div>

<img src="../res/image/alpaca.gif" class="growing_animation" alt="Alpaka samolatająca ">
<img id="alpacaToMove" src="../res/image/alpaca.gif"
     style="left: 100px; top: 100px; width: 100px; height: 100px; position: absolute" alt="Alpaka do ruszania">

<div align="center">
        <label for="backgroundColor">Podaj kolor tła </label><input type="text" id="backgroundColor"><br>
        <label for="textColor">Podaj kolor tekstu </label><input type="text" id="textColor"><br>
        <label>Wybierz czcionkę</label><select id="font">
            <option value="Arial">Arial</option>
            <option value="Impact">Impact</option>
            <option value="Mongolian Baiti">Mongolian Baiti</option>
        </select>
        <button onclick="changeProperties()">Zmień</button>
</div>

<script src="../scripts/funScript.js" language=javascript type="text/javascript"></script>

<?php include ("common/footer.php");?>

</body>
</html>