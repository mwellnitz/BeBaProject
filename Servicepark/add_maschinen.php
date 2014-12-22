<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$idMaschienenanan = $_POST["idMaschienenanan"];
$Standorte_idStandorte = $_POST["Standorte_idStandorte"];
$Hersteller_idHersteller = $_POST["Hersteller_idHersteller"];
$Kategorie_idKategorie = $_POST["Kategorie_idKategorie"];
$Anschaffungsdatum = $_POST["Anschaffungsdatum"];

//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch
if($Standorte_idStandorte == "" or $Hersteller_idHersteller == "" or $Kategorie_idKategorie == "" or $Anschaffungsdatum == "" ) {
	echo "Du hast nicht alle Felder ausgefüllt...";
	}else {
	
	//Datenbank füllen
	$eintrag = "INSERT INTO `maschienen` (Standorte_idStandorte, Hersteller_idHersteller, Kategorie_idKategorie, Anschaffungsdatum) 
						VALUES ('$Standorte_idStandorte','$Hersteller_idHersteller','$Kategorie_idKategorie', '$Anschaffungsdatum');"; 


	$eintragen	= mysql_query($eintrag);
	
	
	if($eintragen == true) {
                $returntext="Vielen Dank der Datensatz wurde erfolgreich hinzugefügt";
        
                }else{
                $returntext="Ein Fehler beim Einfügen ist aufgetreten!<br>$eintragen";
}


?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Hinzufügen einer Maschine</title>
  <meta http-equiv="refresh" content="5; url=maschinen.php">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

</body>
</html>