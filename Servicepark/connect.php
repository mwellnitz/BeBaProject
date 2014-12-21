<?php
	$host = "localhost";
	$user = "root";	
	$passwort = "";	
	$dbname = "servicepark";
	
	$connection = mysql_connect ($host, $user, $passwort);
		if ( ! $connection) 
			die('Keine Serververbindung: '.mysql_error());
			
	$db = mysql_select_db($dbname);
		if ( ! $db) 
			die('Kein Datenbankzugriff: '.mysql_error());
			
	mysql_query("SET NAMES 'utf8'");
?>
