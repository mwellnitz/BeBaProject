<?php

		// display the list of all customer in table view
        $sql = "SELECT * FROM hersteller ORDER BY idHersteller ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
	echo '<tr>';
		echo '<th>idHersteller</th>';
		echo '<th>Name</th>';
		echo '<th>Anschrift</th>';
		echo '<th>Delete Customer</th>';
	echo '</tr>';
		while($row = mysql_fetch_array($query)) {
	echo '<tr>';
		echo "<td>".$row['idHersteller']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Anschrift']."</td>";
		echo '<td><form action="delete_hersteller.php" method="post"><input type="hidden" name="idHersteller" value="'.$row = mysql_fetch_array($query).'" /><input type="submit" value="Delete" /></form></td>';
		echo "</td>";	
	echo '</tr>';
	}
echo "</table>";
?>	

