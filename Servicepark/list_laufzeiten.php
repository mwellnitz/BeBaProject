<?php

		// display the list of all Laufzeit in table view
        $sql = "SELECT * FROM betriebszeiten ORDER BY idBetriebszeiten ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
        echo '<th>idMaschinen</th>';
		echo '<th>idMitarbeiter</th>';
		echo '<th>Laufzeitvon</th>';
		echo '<th>Laufzeitbis</th>';
	    echo '<th>Delete Customer</th>';
	echo '</tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo '<tr>';
		echo "<td>".$row['Maschienen_idMaschienenanan']."</td>";
		echo "<td>".$row['Mitarbeiter_idMitarbeiter']."</td>";
		echo "<td>".$row['Laufzeitvon']."</td>";
		echo "<td>".$row['Laufzeitbis']."</td>";
		echo '<td><form action="delete_laufzeiten.php" method="POST"><input type="hidden" name="idBetriebszeiten" value="'.$row['idBetriebszeiten'].'" /><input type="submit" value="Delete" /></FORM></td>';
			
	echo '</tr>';
	}
echo "</table>";
?>	

