<?php
include("connect.php"); //Datenbankverbindung
include("mytools.php");

		// display the list of all Laufzeit in table view
        $sql = "SELECT * FROM betriebszeiten ORDER BY idBetriebszeiten ASC";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idBetriebszeiten</th>';
        echo '<th>idMaschinen</th>';
		echo '<th>idMitarbeiter</th>';
		echo '<th>Laufzeitvon</th>';
		echo '<th>Laufzeitbis</th>';
	    echo '<th>Delete Customer</th>';
	echo '<tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo 'tr';
		echo "<td>".$row['idBetriebszeiten']."</td>";
		echo "<td>".$row['Maschienen_idMaschienenanan']."</td>";
		echo "<td>".$row['Mitarbeiter_idMitarbeiter']."</td>";
		echo "<td>".$row['Laufzeitvon']."</td>";
		echo "<td>".$row['Laufzeitbis']."</td>";
		//<td><form action="delete_laufzeiten.php" method="get"><input type="hidden" name="idBetriebszeiten" value="5" /><input type="submit" value="Delete" /></td>
			
	echo '</tr>';
	}
echo "</table>";
?>	

