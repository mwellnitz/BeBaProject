 <?php
	include("connect.php");//Datenbankverbindung
		$loeschen = "DELETE FROM hersteller WHERE idHersteller = " . mysql_real_escape_string($_POST["idHersteller"]) . " LIMIT 1;"; //delete-Anweisung
		$sql_befehl = mysql_query($loeschen);
			if(mysql_affected_rows() == 1) {
			
    //erfolgreich gelöscht
		echo "producer hast been deleted!";
		
    } else {
	
		//nichts gelöscht
		echo "Es ist ein Fehler aufgetreten!";
    }
	
		// und zurück zur Anzeige
		header("location: maschinen.php");
 ?>