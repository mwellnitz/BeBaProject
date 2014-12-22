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

