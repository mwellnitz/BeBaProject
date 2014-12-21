<?php	
$SID = session_id();
if(empty($SID)) { 
   header('Location: anmeldung.php');
   exit;
}
include("connect.php");	

if($_SESSION){

	SESSION_destroy();
	header('Location: anmeldung.php');
        exit;
}
?>