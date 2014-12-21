<?php
include("connect.php"); //Datenbankverbindung
include("mytools.php");

		// display the list of all kategorie in table view
        $sql = "SELECT * FROM Kategorie ORDER BY idKategorie ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idKategorie</th>';
        echo '<th>Name</th>';
	    echo '<th>Delete Customer</th>';
	echo '<tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo 'tr';
		echo "<td>".$row['idKategorie']."</td>";
		echo "<td>".$row['name']."</td>";
		//<td><form action="delete_kategorie.php" method="get"><input type="hidden" name="idKategorie" value="5" /><input type="submit" value="Delete" /></td>
			
	echo '</tr>';
	}
echo "</table>";
?>	

