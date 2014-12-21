<?php	
session_start();
include("connect.php");

if($_SESSION){

	SESSION_destroy();
	
?>

<script type="text/javascript">
	alert("Sie sind ausgeloggt");
	window.location.href = "Index.html";
</script>

<?php
}
?>