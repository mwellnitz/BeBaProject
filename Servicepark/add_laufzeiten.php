<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idBetriebszeiten = $_POST["idBetriebszeiten"];
$Maschienen_idMaschienenanan = $_POST["Maschienen_idMaschienenanan"];
$Mitarbeiter_idMitarbeiter = $_POST["Mitarbeiter_idMitarbeiter"];
$Laufzeitvon = $_POST["Laufzeitvon"];
$Laufzeitbis = $_POST["Laufzeitbis"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($Maschienen_idMaschienenanan == "" or $Mitarbeiter_idMitarbeiter == "" or $Laufzeitvon == "" or $Laufzeitbis == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	//Datenbank füllen
	$eintrag = "INSERT INTO `betriebszeiten` (`Maschienen_idMaschienenanan`, `Mitarbeiter_idMitarbeiter`, `Laufzeitvon`, `Laufzeitbis`) VALUES
				('$Maschienen_idMaschienenanan', '$Mitarbeiter_idMitarbeiter', '$Laufzeitvon', '$Laufzeitbis');"; 
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

