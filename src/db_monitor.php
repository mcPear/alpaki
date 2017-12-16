<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data monitor</title>
    <meta name="data_monitor" content="Monitor danych">
    <meta name="keywords" content="baza, dane, monitorowanie">
    <?php
    if (isset($_COOKIE['css'])) {
        echo '<link rel="stylesheet" type="text/css" href="../styles/' . $_COOKIE['css'] . '">';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';
    }
    ?>
</head>
<body>
<?php include("common/header.php"); ?>
<?php

if (isset($_SESSION["valid"])){
    include ("db/db_connect.php");
    $link->select_db("alpaki");
    $users = $link->query("SELECT * FROM users");

    echo  '<div style="text-align:center">login |  imię |  nazwisko | email';
    echo "<br />";
    while($row = $users->fetch_array())
      {
      echo  $row['login'] . " | " . $row['firstname'] . " | " . $row['lastname'] . " | " . $row['email'];
      echo "<br />";
      }
      echo "</div>";
    $link->close();
}
else{
echo  "Log in to see content";
}

?>
<?php include("common/footer.php"); ?>
</body>
</html>