<?php
session_start();
include("connect.php");
$verhalten = 0;

	if(isset($_SESSION["user"]))
		header('Location: betriebsdaten.php'); 

	$user = $_POST["user"];
	$passwort = md5($_POST["passwort"]);
//	$passwort = $_POST["passwort"];

	$verbindung = mysql_connect("localhost", "root", "")
			or die ("Fehler im System");

	mysql_select_db("servicepark")
	or die ("Verbidung zur Datenbank war nicht möglich...");
			
			$abfrage = "SELECT count(*) from mitarbeiter WHERE name like '$user' AND PasswordDB like '$passwort';";
			$ergebnis = mysql_query($abfrage);
			echo $abfrage;
			while($row = mysql_fetch_object($ergebnis))
				{
					
					if ($row)
						header('Location: betriebsdaten.php');
						exit;
				}	
header('Location: anmeldung.php');

?>
<html>
<body>
	<?php
			if($verhalten == 0) {
	?>
		Bitte logge dich ein:<br />
		<p><a href="anmeldung.php">Nicht eingeloggt!</a></p>
	<?php
	}
			if($verhalten == 1) {
	?>
		Du hast dich richtig eingeloggt und wirst nun weitergeleitet....
		<meta http-equiv="refresh" content="5, url=betriebsdaten.php">
	<?php
	}
			if($verhalten == 2) {
	?>
		Du hast dich nicht richtig eingeloggt, <br><a href="anmeldung.php">zurück</a>.
	<?php
	}	
	?>
</body>
</html>