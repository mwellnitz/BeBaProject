<?php

include("connect.php"); //Aufbau Datenbankverbindung

//deklarierte Variablen
$ID = $_POST["id"];
$user = $_POST["user"];
$telefon = $_POST["telefon"];
$mitarbeitertyp = $_POST["typ"];
$rechtetyp = $_POST["recht"];
$passwort = $_POST["passwort"];
$returntext = "";
//Vergleich, wenn eines der genannzten Felder leer ist, dann Abbruch

if($user == "" or $telefon == "" or $mitarbeitertyp == "" or $rechtetyp == "" or $passwort == "") {
        echo "Du hast nicht alle Felder ausgefüllt...";
        }else{
        
        $eintrag = "INSERT INTO mitarbeiter (Name, Tele, Mitarbeitertyp, Rechte, PasswordDB) VALUES 
                                ('$user', '$telefon', '$mitarbeitertyp','$rechtetyp', '$passwort');";


        $eintragen      = mysql_query($eintrag);
        
        
        if($eintragen == true) {
                $returntext="Vielen Dank der Datensatz wurde erfolgreich hinzugefügt";
        
                }else{
                $returntext="Ein Fehler beim Einfügen ist aufgetreten!<br>$eintragen";
        }
}


?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Hinzufügen eines Mitarbeiters</title>
  <meta http-equiv="refresh" content="5; url=mitarbeiter.php">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<h3><?php echo $returntext ?></h3>
<h3><?php echo $eintrag  ?></h3>
</body>
</html>