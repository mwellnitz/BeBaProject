<?php
		// display the list of all members in table view
        $sql = "SELECT * FROM mitarbeiter;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>Name</th>';
        echo '<th>Telefon</th>';
        echo '<th>Mitarbeiterrolle</th>';
		echo '<th>Anwenderrolle</th>';
		echo '<th>Passwort</th>';
//	    echo '<th>Mitarbeiter<br>löschen</th>';
	echo '<tr>';
		while($row = mysql_fetch_array($query)) {
	echo '<tr>';
		echo "<td>".$row['Name']."</td>";     			//auf groß und kleinschreiben achten (in der DB)
		echo "<td>".$row['Tele']."</td>";
		echo "<td>".$row['Mitarbeitertyp']."</td>";
		echo "<td>".$row['Rechte']."</td>";
		echo "<td>".$row['PasswordDB']."</td>";
//		echo '<td><form action="delete_member.php" method="post"><input type="hidden" name="idMaschienenwartung" value="'.$row['Name'].'" /><input type="submit" value="Delete" /></form></td>';
			
	echo '</tr>';
	}
echo "</table>";
?>	