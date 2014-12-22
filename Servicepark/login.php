<?php
include("connect.php");
	$user = $_POST["user"];
	$passwort = md5($_POST["passwort"]);
//	$passwort = $_POST["passwort"];

	$verbindung = mysql_connect("localhost", "root", "")
			or die ("Fehler im System");

	mysql_select_db("servicepark")
	or die ("Verbidung zur Datenbank war nicht möglich...");
			
	$abfrage = "SELECT count(*) from mitarbeiter WHERE name like '$user' AND PasswordDB like '$passwort';";
	$ergebnis = mysql_query($abfrage);
	error_log("$abfrage");
	while($row = mysql_fetch_object($ergebnis)) {
		//error_log("$row");
		if ($row) {
                        error_log("[INFO] $myURL : Session for user $user started.");
			$_SESSION['username'] = $user;
			header('Location: betriebsdaten.php');
			exit;
                } else {
		  header('Location: anmeldung.php');
                }
	}	

?>