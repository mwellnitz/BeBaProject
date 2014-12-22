<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idKategorie = $_POST["idKategorie"];
$name = $_POST["name"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($name == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	//Datenbank füllen
	$eintrag = "INSERT INTO kategorie (name) VALUES ('$name');";
        error_log("$eintrag");


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	                header('Location: maschinen.php');

		}else{
	
	echo "Fehler im System, automatische Weiterleitung";
	                header('Location: maschinen.php');
	}
}


?>

