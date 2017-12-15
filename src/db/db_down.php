<?php

include ("db_connect.php");
echo $msg;

$sql = "DROP DATABASE IF EXISTS alpaki";

if ($link->query($sql) === TRUE) {
    echo "Usunięto bazę danych"."<br>";

} else {
    echo "Błąd podczas tworzenia tabeli " . $link->error."<br>";
}

$link->close();


?>