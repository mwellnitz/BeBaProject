<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idMaschienenwartung = $_POST["idMaschienenwartung"];
$Maschienen_idMaschienenanan = $_POST["Maschienen_idMaschienenanan"];
$Mitarbeiter_idMitarbeiter = $_POST["Mitarbeiter_idMitarbeiter"];
$Datum = $_POST["Datum"];
$Arbeitsbeschreibung = $_POST["Arbeitsbeschreibung"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($idMaschienenwartung == "" or $Maschienen_idMaschienenanan == "" or $Mitarbeiter_idMitarbeiter == "" or $Datum == "" or $Arbeitsbeschreibung == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	$eintrag = "INSERT INTO `Maschienenwartung` (`idMaschienenwartung`, `Maschienen_idMaschienenanan`, `Mitarbeiter_idMitarbeiter`, `Datum`, `Arbeitsbeschreibung`) VALUES //Datenbank füllen
				('$idMaschienenwartung','$Maschienen_idMaschienenanan','$Mitarbeiter_idMitarbeiter','$Datum','$Arbeitsbeschreibung')";


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=betriebsdaten.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=betriebsdaten.php"> //wenn nicht erfolgreich dann Weiterleitung...
	} 
}


?>

