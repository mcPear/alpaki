<?php

$host = "localhost";
$user = "root";
$password = "pass";
$dbname = "alpaki";
$msg = "";

$link = mysqli_connect("localhost", $user, $password);

if (mysqli_connect_errno()) // zwraca kod błędu ostatniego połączenia
{
    $msg = "Wystąpił błąd: ". mysqli_connect_error()."<br>";
    exit;
}
else{
    $msg = "Połaczono z bazą danych"."<br>";
}


?>