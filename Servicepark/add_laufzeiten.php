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
	$eintrag = "INSERT INTO `Betriebszeiten` (`Maschienen_idMaschienenanan`, `Mitarbeiter_idMitarbeiter`, `Laufzeitvon`, `Laufzeitbis`) VALUES
				('$Maschienen_idMaschienenanan', '$Mitarbeiter_idMitarbeiter', '$Laufzeitvon', '$Laufzeitbis');"; 


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=betriebsdaten.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=betriebsdaten.php"> //wenn nicht erfolgreich dann Weiterleitung...
	} 
}


?>

