<?php
session_start();
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Berlin" );  // http://www.php.net/manual/en/timezones.php

//check if we are during the login procedere
$myURL=$_SERVER["REQUEST_URI"];
if ( $myURL == "/Servicepark/login.php" || $myURL == "/Servicepark/anmeldung.php" ) {
  // no active session is required
  error_log("[INFO] connect.php : New Session is requested");
} else {
  // a valid session has to be there
  $username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";
  if ( ! $username ) {
    error_log("[WARNING] connect.php : Session not valid");
    header('Location: anmeldung.php');
    exit;
  }
}


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
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

?>
