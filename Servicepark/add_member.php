<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$ID = $_POST["id"];
$user = $_POST["user"];
$telefon = $_POST["telefon"];
$mitarbeitertyp = $_POST["typ"];
$rechtetyp = $_POST["recht"];
$passwort = $_POST["passwort"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch

if($ID == "" or $user == "" or $telefon == "" or $mitarbeitertyp == "" or $rechtetyp == "" or $passwort == "") {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else{
	
	$eintrag = "INSERT INTO Mitarbeiter (idMitarbeiter,Name, Tele, Mitarbeitertyp, Rechte, PasswordDB) VALUES //Datenbank füllen
				('$user', '$telefon', '$mitarbeitertyp','$rechtetyp', '$passwort'))";


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
	<meta http-equiv="refresh" content="5; url=mitarbeiter.php"> //wenn erfolgreich dann Weiterleitung...
	
		}else{
	
	echo "Fehler im System, automatische Weiterleitung" <meta http-equiv="refresh" content="5, url=mitarbeiter.php"> //wenn nicht erfolgreich dann Weiterleitung...
	}
}


?>

