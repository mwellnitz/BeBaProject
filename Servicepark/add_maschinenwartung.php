<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idMaschienenwartung = $_POST["idMaschienenwartung"];
$Maschienen_idMaschienenanan = $_POST["Maschienen_idMaschienenanan"];
$Mitarbeiter_idMitarbeiter = $_POST["Mitarbeiter_idMitarbeiter"];
$Datum = $_POST["Datum"];
$Arbeitsbeschreibung = $_POST["Arbeitsbeschreibung"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($Maschienen_idMaschienenanan == "" or $Mitarbeiter_idMitarbeiter == "" or $Datum == "" or $Arbeitsbeschreibung == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	$eintrag = "INSERT INTO maschienenwartung (Maschienen_idMaschienenanan, Mitarbeiter_idMitarbeiter, Datum, Arbeitsbeschreibung) VALUES //Datenbank füllen
				('$Maschienen_idMaschienenanan','$Mitarbeiter_idMitarbeiter','$Datum','$Arbeitsbeschreibung')";
        error_log("$eintrag");


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	                header('Location: betriebsdaten.php');
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung";
	                header('Location: betriebsdaten.php');
	} 
}


?>

