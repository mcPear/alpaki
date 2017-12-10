<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Nasze alpaki</title>
    <meta name="description" content="Prezentacja aplak będących w posiadaniu firmy">
    <meta name="keywords" content="alpaka, aplaki, hodowla, prezentacja">
    <?php
    if(isset($_COOKIE['css'])){
        echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
        } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
        ?>
    <script src="../scripts/alpacasScript.js" language=javascript type="text/javascript"></script>
</head>

<body>

<!--navbar-->
<?php include ("common/header.php");?>

<h2>Nasze alpaki</h2>
<h4 id="headText">Prowadzimy prywatną hodowlę alpak pod Wrocławiem.</h4>
<div class="rounded-shaded-border grad-bottom-right">
<div class="newspaper">Około 95 % alpak w Polsce, podobnie jak i na świecie stanowią osobniki odmiany Huacaya,
które są najbardziej znane ze swojej puszystości w świecie zwierząt.
Z alpaki dorosłej i wysokiej jakości można uzyskać od 2 do 5 kilogramów runa każdego roku.
Z wybitnych zwierząt można otrzymać nawet od 5 do 7 runa rocznie.
     W przeciwieństwie do owiec runo alpaka nie zawiera lanoliny. Również w porównaniu do wełny owczej,
     wełna alpaki jest 8-krotnie cieplejsza, więc ten sam produkt staje się 8-krotnie lżejszy.
     Z około 50% uzyskanego runa produkuje się najwyższej jakości koce pod względem włókna, resztę stanowią swetry, szale itp.

     Około 5% alpak stanowi podgatunek nazwany Suri. Są to rzadkie i ekskluzywne zwierzęta w hodowli.
     Suri mają wiszące zakręcone kosmyki jak owce gatunku Wensleydale, które poruszają się j
     ak zasłony dmuchane na wietrze kiedy biegną po wybiegu. Suri wytwarzają najcenniejsze runo, k
     tóre jest bardzo gładkie, jedwabiste, lśniące i chłodne w dotyku. Suri bardzo dobrze czują się i
      radzą sobie w Europejskim klimacie jednak potrzebują podobnie jak Huacaya schronienia przed dużymi
       (obfitymi) deszczami. Suri mają niezasłużoną reputację zwierząt bardzo nerwowych. Może to wynikać
       częściowo z faktu ich budowy ciała (długa grzywka nisko ponad ich oczami) stąd też czasem nie mogą
       zobaczyć co dzieje się wokół nich. W chwili przycięcia tych punktów stają się całkowicie spokojne i
       szczęśliwe.
       </div>
       </div>
<div class = "rounded-shaded-border grad-bottom-right" >
<p>Posiadamy 5
    <mark>przystojnych</mark>
    alpak.<br>
    Nasza hodowla jest warta około 400&euro;
</p>
<a style="text-align: right" href="#alpacas_bottom">[na dół strony]</a>
</div>
<table style="margin-right: auto;margin-left: auto; background-color: white">
    <caption><h3><b>Alpaki</b></h3></caption>
    <tr>
        <th colspan="3">Dane</th>
    </tr>
    <tr>
        <th>Zdjęcie</th>
        <th>Imię</th>
        <th>Wiek</th>
    </tr>
    <tr>
        <td><img src="../res/image/alpaka2.jpg" alt="Adrian" height=200 width=200></td>
        <td><p style="text-align:center;">Adrian</p></td>
        <td><p style="text-align:center;">1 rok</p></td>
    </tr>
    <tr>
        <td><img src="../res/image/a2.jpg" alt="Marek" height=200 width=200></td>
        <td><p style="text-align:center;">Marek</p></td>
        <td><p style="text-align:center;">10 miesięcy</p></td>
    </tr>
    <tr>
        <td><img src="../res/image/a3.jpg" alt="Dawid" height=200 width=200></td>
        <td><p style="text-align:center;">Dawid</p></td>
        <td><p style="text-align:center;">3 lata</p></td>
    </tr>
    <tr>
        <td><img src="../res/image/a4.jpg" alt="Andżelika" height=200 width=200></td>
        <td><p style="text-align:center;">Andżelika</p></td>
        <td><p style="text-align:center;">2 lata</p></td>
    </tr>
    <tr>
        <td><img src="../res/image/a5.jpg" alt="Michał" height=200 width=200></td>
        <td colspan="2"><p style="text-align:center;">noworodek Michał</p></td>
    </tr>
    <tr>
        <td colspan="3">
            <table>
                <caption><h3><b>Bliźniaki</b></h3></caption>
                <tr>
                    <th>Zdjęcie</th>
                    <th>Imię</th>
                    <th>Wiek</th>
                </tr>
                <tr>
                    <td><img src="../res/image/blizniaki.jpg" alt="Daniel" height=200 width=200></td>
                    <td><p style="text-align:center;">Daniel</p></td>
                    <td rowspan="3"><p style="text-align:center;">4 lata</p></td>
                </tr>
                <tr>
                    <td><img src="../res/image/blizniaki.jpg" alt="Jurek" height=200 width=200></td>
                    <td><p style="text-align:center;">Jurek</p></td>
                </tr>
                <tr>
                    <td><img src="../res/image/blizniaki.jpg" alt="Witek" height=200 width=200></td>
                    <td><p style="text-align:center;">Witek</p></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<a id="alpacas_bottom"></a>

<?php include ("common/footer.php");?>

</body>
</html>