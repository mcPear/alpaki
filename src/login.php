<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <meta name="description" content="Strona startowa firmy Polskie Alpaki">
    <meta name="keywords" content="start, firma, Polskie Alpaki">
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

$users = array("a" =>"a",
                "admin"=>"admin");

function key_value_pair_exists(array $array, $key, $value) {
    return array_key_exists($key, $array) &&
        $array[$key] == $value;
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (key_value_pair_exists($users,$username,$password)) {
        $_SESSION["valid"] = true;
        $_SESSION["username"] = $username;
    } else {
        $msg = "Błędny login lub hasło";
    }
}

//navbar
include("common/header.php");

if (isset($_SESSION["valid"]) && $_SESSION["valid"] == true) {
    echo("<p style='text-align: center'>Jesteś zalogowany jako " . $_SESSION["username"] . "</p>");
}
else {
    echo("<h2>Podaj login i hasło</h2>
    <form action='login.php' method='post' style='text-align: center'>
    <p>Login</p>
    <input type='text' name='username'><br>
    <p>Hasło</p>
    <input type='password' name='password'><br><br>
    <input type='submit' value='Zaloguj' name='login'>
    <p style='color: red'>" . $msg . "</p>
    </form>");
}


?>
<?php include("common/footer.php"); ?>
</body>
</html>