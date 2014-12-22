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
	
	$eintrag = "INSERT INTO standorte (Halle, Platznr) VALUES ('$Halle_, '$Platznr')";  //Datenbank füllen
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

