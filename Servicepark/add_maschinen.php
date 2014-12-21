<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idMaschienenanan = $_POST["idMaschienenanan"];
$Standorte_idStandorte = $_POST["Standorte_idStandorte"];
$Hersteller_idHersteller = $_POST["Hersteller_idHersteller"];
$Kategorie_idKategorie = $_POST["Kategorie_idKategorie"];
$Anschaffungsdatum = $_POST["Anschaffungsdatum"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($idMaschienenanan == "" or $Standorte_idStandorte == "" or $Hersteller_idHersteller == "" or $Kategorie_idKategorie == "" or $Anschaffungsdatum == "" ) {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	//Datenbank füllen
	$eintrag = "INSERT INTO `Maschienen` (`idMaschienenanan`, `Standorte_idStandorte`, `Hersteller_idHersteller`, `Kategorie_idKategorie`, 	 
				`Anschaffungsdatum`) VALUES ('$idMaschienenanan',`$Standorte_idStandorte`,'$Hersteller_idHersteller','$Kategorie_idKategorie', '$Anschaffungsdatum'))"; 


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=maschinen.php"> //wenn nicht erfolgreich dann Weiterleitung...
	}
}


?>

