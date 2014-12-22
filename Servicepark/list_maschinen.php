<?php
		// display the list of all maschines in table view
        $sql = "SELECT * FROM maschienen ORDER BY idMaschienenanan ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idMaschinen</th>';
        echo '<th>Standorte_idStandorte</th>';
        echo '<th>Hersteller_idHersteller</th>';
		echo '<th>Kategorie_idKategorie</th>';
		echo '<th>Anschaffungsdatum</th>';
	    echo '<th>Delete member</th>';
	echo '<tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo 'tr';
		echo "<td>".$row['idMaschienenanan']."</td>";
		echo "<td>".$row['Standorte_idStandorte']."</td>";
		echo "<td>".$row['Hersteller_idHersteller']."</td>";
		echo "<td>".$row['Kategorie_idKategorie']."</td>";
		echo "<td>".$row['Anschaffungsdatum']."</td>";
		echo '<td><form action="delete_maschinen.php" method="post"><input type="hidden" name="idMaschinen" value="'.$row['idMaschienenanan'].'" /><input type="submit" value="Delete" /></form></td>';
			
	echo '</tr>';
	}
echo "</table>";
?>	

