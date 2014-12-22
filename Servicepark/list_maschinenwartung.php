<?php
//include("connect.php"); //Datenbankverbindung
include("mytools.php");
		// display the list of all Wartung in table view
        $sql = "SELECT * FROM maschienenwartung ORDER BY idMaschienenwartung ASC;";
        $query = mysql_query($sql) or die(mysql_error());

echo "<table border = 1>";
		echo '<tr>';
		echo '<th>idMaschienenwartung</th>';
        echo '<th>idMaschinen</th>';
		echo '<th>idMitarbeiter</th>';
		echo '<th>Datum</th>';
		echo '<th>Arbeitsbeschreibung</th>';
	    echo '<th>Delete Customer</th>';
	echo '<tr>';
		
		while($row = mysql_fetch_array($query)) {
	echo '<tr>';
		echo "<td>".$row['idMaschienenwartung']."</td>";
		echo "<td>".$row['Maschienen_idMaschienenanan']."</td>";
		echo "<td>".$row['Mitarbeiter_idMitarbeiter']."</td>";
		echo "<td>".$row['Datum']."</td>";
		echo "<td>".$row['Arbeitsbeschreibung']."</td>";
		//<td><form action="delete_maschinenwartung.php" method="get"><input type="hidden" name="idMaschienenwartung" value="5" /><input type="submit" value="Delete" /></td>
			
	echo '</tr>';
	}
echo "</table>";
?>	

