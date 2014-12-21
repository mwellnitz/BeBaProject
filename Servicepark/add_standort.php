<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idStandorte = $_POST["idStandorte"];
$Halle = $_POST["Halle"];
$Platznr = $_POST["Platznr"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($Halle == "" or $Platznr == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	$eintrag = "INSERT INTO `Standorte` (`Halle`, 'Platznr') VALUES (`$Halle`, '$Platznr'))";  //Datenbank füllen


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn nicht erfolgreich dann Weiterleitung...
	}
}


?>

