<?php
		// display the list of all Standorte in table view
        $sql = "SELECT * FROM standorte ORDER BY idStandorte ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idStandorte</th>';
        echo '<th>Halle</th>';
		echo '<th>Platznr</th>';
	    echo '<th>Delete Customer</th>';
	echo '<tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo 'tr';
		echo "<td>".$row['idStandorte']."</td>";
		echo "<td>".$row['Halle']."</td>";
		echo "<td>".$row['Platznr']."</td>";
		echo '<td><form action="delete_standort.php" method="post"><input type="hidden" name="idStandorte" value="'.$row['idStandorte'].'" /><input type="submit" value="Delete" /></form></td>';
			
	echo '</tr>';
	}
echo "</table>";
?>	

