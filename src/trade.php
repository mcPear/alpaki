<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Handel alpakami</title>
    <meta name="description" content="Oferty sprzedaży i kuona alpak">
    <meta name="keywords" content="alpaka, aplaki, handel, kupno, sprzedaż, kupię, sprzedam">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
</head>

<body>

<!--navbar-->
<?php include ("common/header.php");?>

<h2 class=red-shadow style="text-align:center;">Platforma do handlowania alpakami online</h2>
<h4>Wkrótce ruszy pierwsza w Polsce platforma dedykowana do handlu alpakami. Stan przygotowania strony
    <meter min="0" max="100" value="50">50%</meter>
</h4>


<div class = "rounded-shaded-border grad-bottom-right">
    <p>Nasza platforma umożliwi między innnymi:</p>
    <ul>
        <li>Kupno alpak
            <ul style="list-style-type:circle">
                <li>w naszej firmie</li>
                <li>od polskich i zagranicznych dostawców</li>
                <li>od osób prywatnych</li>
            </ul>
        </li>
        <li>Sprzedaż alpak
            <ul style="list-style-type:circle">
                <li>na krajowym rynku</li>
                <li>na międzynarodowym rynku</li>
            </ul>
        </li>
        <li>Wymianę alpak</li>
        <li>Wypożyczanie aplak</li>
    </ul>
</div>
&nbsp;
<div class = "rounded-shaded-border grad-bottom-right">
<p>Platforma obsłuży 4 różne rodzaje płatności:<br>
<ol type="1">
    <li>tradycyjny przelew</li>
    <li>PayPal</li>
    <li>płatność kartą</li>
    <li>gotówkę</li>
</ol>
&nbsp;
<p>Obecnie handlujemy na
    <a href="https://www.olx.pl/zwierzeta/pozostale-zwierzeta/q-alpaki/" target="_blank">OLX</a>
</p>
</div>
&nbsp;
<div class = rounded-shaded-border id="grad-bottom-right">
<div class="flex-container" >
  <div class="flex-item" >
    <img src="../res/image/alpaka2.jpg" alt="Adrian" height=100 width=100>
    <p>Adrian ma 3 lata. Jest spokojny i mało pluje. Lubi dużo zjeść. Cena to 700 zł.</p>
  </div>
    <div class="flex-item">
    <img src="../res/image/a2.jpg" alt="Marek" height=100 width=100>
    <p>Marcin dużo biega i je. Dobrze wygląda. Ma 2 lata. Cena: 1100 zł.</p>
  </div>
    <div class="flex-item">
    <img src="../res/image/a3.jpg" alt="Dawid" height=100 width=100>
    <p>Beata ma miłe usposobienie. Ma 1 rok. Wyceniamy ją na 900 zł.</p>
  </div>
    <div class="flex-item">
    <img src="../res/image/a4.jpg" alt="Andżelika" height=100 width=100>
    <p>Witek lubi toważystwo innych alpak. Ma 6 lat. Cena 400 zł.</p>
  </div>
</div>
</div>

<?php include ("common/footer.php");?>
</body>
</html>