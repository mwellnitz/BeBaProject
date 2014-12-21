 <?php
	include("connect.php");//Datenbankverbindung
		$loeschen = "DELETE FROM Maschienen WHERE idMaschienenanan = " . mysql_real_escape_string($_GET["idMaschienenanan"]) . " LIMIT 1"; //delete-Anweisung
		$sql_befehl = mysql_query($loeschen);
			if(mysql_affected_rows() == 1) {
			
    //erfolgreich gelöscht
		echo "Maschine hast been deleted!";
		
    } else {
	
		//nichts gelöscht
		echo "Es ist ein Fehler aufgetreten!";
    }
	
		// und zurück zur Anzeige
		header("location: maschinen.php");
 ?>