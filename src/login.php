<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <meta name="description" content="Strona logowania firmy Polskie Alpaki">
    <meta name="keywords" content="logowanie, firma, Polskie Alpaki">
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
$msg = "";

if (isset($_POST["send"])) {

    $userLogin = $_POST["login"];
    $userPassword =$_POST["password"];

    include ("db/db_connect.php");
    $link->select_db("alpaki");
    $stmt = $link->prepare("SELECT * FROM users WHERE login = ? AND password = ?");

    $stmt->bind_param('ss',$userLogin,$userPassword);

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows>0) {
        $_SESSION["valid"] = true;
        $_SESSION["login"] = $userLogin;
    } else {
        $msg = "Błędny login lub hasło";
    }
    $link->close();
}

//navbar
include("common/header.php");

if (isset($_SESSION["valid"]) && $_SESSION["valid"] == true) {
    echo("<p style='text-align: center'>Jesteś zalogowany jako " . $_SESSION["login"] . "</p>");
}
else {
    echo("<h2>Podaj login i hasło</h2>
    <form action='login.php' method='post' style='text-align: center'>
    <p>Login</p>
    <input type='text' name='login'><br>
    <p>Hasło</p>
    <input type='password' name='password'><br><br>
    <input type='submit' value='Zaloguj' name='send'>
    <p style='color: red'>" . $msg . "</p>
    <a style='margin-top: 3em;text-align: center' href='register_edit.php'>Rejestracja</a>
    </form>
");
}


?>
<?php include("common/footer.php"); ?>
</body>
</html>