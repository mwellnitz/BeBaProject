<?php
include("connect.php"); //Datenbankverbindung
include("mytools.php");

		// display the list of all customer in table view
        $sql = "SELECT * FROM Hersteller ORDER BY idHersteller ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idHersteller</th>';
        echo '<th>Name</th>';
        echo '<th>Anschrift</th>';
	    echo '<th>Delete Customer</th>';
		
		echo $query;
		
		while($row = mysql_fetch_array($query)) {
		echo "<td>".$row['idHersteller']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Anschrift']."</td>";
		//<td><form action="delete_hersteller.php" method="get"><input type="hidden" name="idHersteller" value="5" /><input type="submit" value="Delete" /></td>
		echo "</td>";	
	echo '</tr>';
	}
echo "</table>";
?>	

