 <?php
	include("connect.php");//Datenbankverbindung
		$loeschen = "DELETE FROM betriebszeiten WHERE idBetriebszeiten = " . mysql_real_escape_string($_POST["idBetriebszeiten"]) . " LIMIT 1;"; //delete-Anweisung
                error_log("[INFO] delete_laufzeiten.php : $loeschen");
		$sql_befehl = mysql_query($loeschen);
			if(mysql_affected_rows() == 1) {
			
    //erfolgreich gelöscht
		echo "operation time hast been deleted!";
		
    } else {
	
		//nichts gelöscht
		echo "Es ist ein Fehler aufgetreten!";
    }
	
		// und zurück zur Anzeige
		header("location: betriebsdaten.php");
 ?>