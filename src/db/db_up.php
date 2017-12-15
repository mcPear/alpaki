<?php

include ("db_connect.php");

echo $msg;

$sql1 = "CREATE DATABASE alpaki";

$sql2 = "CREATE TABLE users (
ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL UNIQUE,
firstname VARCHAR (30),
lastname VARCHAR (30),
email VARCHAR (30) NOT NULL UNIQUE, 
password VARCHAR(30) NOT NULL
)";

if ($link->query($sql1) === TRUE) {
    echo "Utworzono bazę danych alpaki"."<br>";

    $link->query("USE alpaki");

    if ($link->query($sql2) === TRUE) {
        echo "Utworzono tabele users";

        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('a','Jan','Kowalski','admin@poczta.pl','a')");

    } else {
        echo "Błąd podczas tworzenia tabeli " . $link->error."<br>";
    }
}
else{
    echo "Błąd podczas tworzenia bazy danych " . $link->error."<br>";
}

$link->close();

?>