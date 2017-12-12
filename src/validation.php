<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Praca</title>
    <meta name="description" content="Strona dla osób zainteresowanych pracą w firmie">
    <meta name="keywords" content="praca, gospodarstwo, hodowla, weterynaria, opieka">
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

if (!preg_match("/@/", $_POST["email"])) {
    print("<div style='text-align: center'>");
    print("<h2>Błędny adres email</h2>");
    print("<p>Proszę podać prawidłowy adres email, zawierający znak @</p>");
    print("</div>");
    die();
}
?>
<div style="text-align: center">
    <h2>Witaj <?php print($_POST["firstName"]) ?></h2>
    <p>Dziękujemy za twoje zgłoszenie. Oto dane które podałeś :</p>
    <p>Imie: <strong><?php
            if(isset($_POST["firstName"])) {
                print($_POST["firstName"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p>Nazwisko: <strong><?php
            if(isset($_POST["lastName"])) {
                print($_POST["lastName"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p>Email: <strong><?php print($_POST["email"]) ?></strong></p>
    <p>Treść: <strong><?php
            if(isset($_POST["content"])) {
                print($_POST["content"]);
            }
            else{
                print("Brak");
            }
            ?></strong></p>
    <p style="margin-top: 3em"><?php print($_SERVER["HTTP_USER_AGENT"]) ?></p>
</div>

<?php include ("common/footer.php");?>
</body>
</html>
