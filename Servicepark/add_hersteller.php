<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idHersteller = $_POST["idHersteller"];
$Name = $_POST["Name"];
$anschrift = $_POST["Anschrift"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($Name == "" or $Anschrift == "" ) {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	//Datenbank füllen
	$eintrag = "INSERT INTO `hersteller` (`Name`, `Anschrift`) VALUES (`$Name`,'$Anschrift');";


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn nicht erfolgreich dann Weiterleitung...
	}
}


?>

