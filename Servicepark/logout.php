<?php	
include("connect.php");	

if($_SESSION){

	SESSION_destroy();
	header('Location: anmeldung.php');
        exit;
}
?>