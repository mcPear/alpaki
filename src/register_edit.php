<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rejestracja i edycja</title>
    <meta name="description" content="Strona firmy Polskie Alpaki">
    <meta name="keywords" content="firma, Polskie Alpaki">
    <?php
    if (isset($_COOKIE['css'])) {
        echo '<link rel="stylesheet" type="text/css" href="../styles/' . $_COOKIE['css'] . '">';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';
    }
    ?>
</head>
<body>

<?php

if (!isset($_SESSION["valid"]) && isset($_POST["send"])){
    include ("db/db_connect.php");
    $link->select_db("alpaki");
    $stmt = $link->prepare("INSERT INTO users (login,firstname,lastname,email,password) VALUES (?,?,?,?,?)");

    $login = $_POST["login"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt->bind_param('sssss',$login,$firstname,$lastname,$email,$password);

    $stmt->execute();
    $link->close();

    $_SESSION["valid"] = true;
    $_SESSION["login"] = $login;

}
elseif (isset($_SESSION["valid"]) && isset($_POST["send"])){
    include ("db/db_connect.php");
    $link->select_db("alpaki");
    $stmt = $link->prepare("UPDATE users SET firstname = ?,lastname = ?,email = ?,password = ? WHERE login = ?");

    $login = $_SESSION["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt->bind_param('sssss',$firstname,$lastname,$email,$password,$login);

    $stmt->execute();
    $link->close();

}

?>

<?php include("common/header.php"); ?>

<?php
if (!isset($_SESSION["valid"])){

    echo ("<form action=\"register_edit.php\" method=\"post\" style=\"text-align: center\">
    <h2>Rejestracja</h2>
    <p>Login</p>
    <input type=\"text\" name=\"login\" required><br>
    <p>Imię</p>
    <input type=\"text\" name=\"firstname\" required><br>
    <p>Nazwisko</p>
    <input type=\"text\" name=\"lastname\" required><br>
    <p>Email</p>
    <input type=\"email\" name=\"email\" required><br>
    <p>Hasło</p>
    <input type=\"password\" name=\"password\" required><br>
    <input type=\"submit\" value=\"Wyslij\" name=\"send\" style='margin-top: 2em'>
</form>");

}
else{

    echo ("<form action=\"register_edit.php\" method=\"post\" style=\"text-align: center\">
    <h2>Edycja danych</h2>
    <p>Login</p>
    <input type=\"text\" name=\"login\" value='".$_SESSION["login"]."' disabled><br>
    <p>Imię</p>
    <input type=\"text\" name=\"firstname\" required><br>
    <p>Nazwisko</p>
    <input type=\"text\" name=\"lastname\" required><br>
    <p>Email</p>
    <input type=\"email\" name=\"email\" required><br>
    <p>Hasło</p>
    <input type=\"password\" name=\"password\" required><br>
    <input type=\"submit\" value=\"Wyslij\" name=\"send\" style='margin-top: 2em'>
</form>");


}

?>




<?php include("common/footer.php"); ?>
</body>
</html>