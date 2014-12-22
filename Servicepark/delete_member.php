 <?php
	include("connect.php");//Datenbankverbindung
	include("mytools.php");
		$loeschen = "DELETE FROM mitarbeiter WHERE Name = " . mysql_real_escape_string($_GET["user"]) . " LIMIT 1;"; //delete-Anweisung
		$sql_befehl = mysql_query($loeschen);
			if(mysql_affected_rows() == 1) {
			
    //erfolgreich gelöscht
		echo "Member hast been deleted!";
		
    } else {
	
		//nichts gelöscht
		echo "Es ist ein Fehler aufgetreten!";
    }
	
		// und zurück zur Anzeige
		header("location: mitarbeiter.php");
 ?>