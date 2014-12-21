<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idKategorie = $_POST["idKategorie"];
$name = $_POST["name"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($idKategorie == "" or $name == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	//Datenbank füllen
	$eintrag = "INSERT INTO `Kategorie` (`idKategorie`, `name`) VALUES ('$idKategorie',`$name`))";


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn nicht erfolgreich dann Weiterleitung...
	}
}


?>

