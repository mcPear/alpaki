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

        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('jan1','Jan','Kowalski','admin@poczta.pl','a')");
        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('mirek1','Mirosław','Szybki','mirek@poczta.eu','aasd')");
        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('zenek1','Zenon','Kowalski','zenek@poczta.en','a45t')");
        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('adam4','Adam','Nowak','admin@o2.pl','avds')");
        $link->query("INSERT INTO users (login,firstname,lastname,email,password) VALUES ('irek7','Ireneusz','Wysocki','irek4@gmail.com','atr')");

    } else {
        echo "Błąd podczas tworzenia tabeli " . $link->error."<br>";
    }
}
else{
    echo "Błąd podczas tworzenia bazy danych " . $link->error."<br>";
}

$link->close();

?>