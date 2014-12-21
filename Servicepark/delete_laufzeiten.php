 <?php
	include("connect.php");//Datenbankverbindung
		$loeschen = "DELETE FROM Betriebszeiten WHERE idBetriebszeiten = " . mysql_real_escape_string($_GET["idBetriebszeiten"]) . " LIMIT 1"; //delete-Anweisung
		$sql_befehl = mysql_query($loeschen);
			if(mysql_affected_rows() == 1) {
			
    //erfolgreich gelöscht
		echo "operation time hast been deleted!";
		
    } else {
	
		//nichts gelöscht
		echo "Es ist ein Fehler aufgetreten!";
    }
	
		// und zurück zur Anzeige
		header("location: maschinen.php");
 ?>