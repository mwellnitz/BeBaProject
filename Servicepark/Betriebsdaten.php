<?php
session_start();
include("connect.php");	

?>

//Beginn geschützter Bereich
<!DOCTYPE HTML>
<html>

<head>
  <title>Betriebsdaten</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Service<span class="logo_colour">Park</span></a></h1>
          <h2>Benedict Wellnitz. Bastian Streichert.</h2>
		  <h2><a style="text-decoration:none;border-style:none;color:white;" target="_blank" href="http://www.schnelle-online.info/Kalender.html" id="soidate148827516277">Kalender</a><br/><a style="text-decoration:none;border-style:none;color:white;" target="_blank" href="http://www.schnelle-online.info/Atomuhr-Uhrzeit.html" id="soitime148827516277">Uhrzeit</a>
				<script type="text/javascript">
					SOI = (typeof(SOI) != 'undefined') ? SOI : {};(SOI.ac21fs = SOI.ac21fs || []).push(function() {
					(new SOI.DateTimeService("148827516277", "DE")).start();});
					(function() {if (typeof(SOI.scrAc21) == "undefined") { SOI.scrAc21=document.createElement('script');SOI.scrAc21.type='text/javascript'; SOI.scrAc21.async=true;SOI.scrAc21.src=((document.location.protocol == 'https:') ? 'https://' : 'http://') + 'homepage-tools.schnelle-online.info/Homepage/atomicclock2_1.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(SOI.scrAc21, s);}})();
				</script>
			</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="mitarbeiter.php">Mitarbeiter</a></li>
          <li><a href="Maschinen.php">Maschinen</a></li>
          <li class="selected"><a href="Betriebsdaten.php">Betriebsdaten</a></li>
          <li><a href="anmeldung.php">Sign In</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
      </div>
      <div id="content">
        <h1>Laufzeiten und Wartungsvorgänge</h1>
		<p>Laufzeiten erfassen:</p>
        <table style="width:100%; border-spacing:0;">
		<Form action="add_laufzeiten.php" method="post">
          <tr><th>idBetriebszeiten<input type="text" name="idBetriebszeiten"/></th><th>idMaschinen<input type="text" name="Maschienen_idMaschienenanan"/></th><th>Mitarbeiterid<input type="text" name="Mitarbeiter_idMitarbeiter"/></th><th>Laufzeitvon<input type="text" name="Laufzeitvon"/></th><th>Laufzeitbis<input type="text" name="Laufzeitbis"/></th><th><input type="submit" value="Add"/></th><th></th></tr>
          </form>
		  </table>
		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Laufzeit </legend>
                <div id="list_container">
                    <?php 
                        include('connect.php');
                        include('list_laufzeiten.php'); 
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
	<div id="site_content">
      <div id="sidebar_container">
      </div>
      <div id="content">
		<p>Maschinenwartung:</p>
        <table style="width:100%; border-spacing:0;">
		<Form action="add_maschinenwartung.php" method="post">
          <tr><th>idMaschienenwartung<input type="text" name="idMaschienenwartung"/></th><th>idMaschinen<input type="text" name="Maschienen_idMaschienenanan"/></th><th>Mitarbeiterid<input type="text" name="Mitarbeiter_idMitarbeiter"/></th><th>Datum<input type="text" name="Datum"/></th><th>Arbeitsbeschreibung<input type="text" name="Arbeitsbeschreibung"/></th><th><input type="submit" value="Add"/></th><th></th></tr>
          </form>
		  </table>
		  <fieldset class="field_container"> 
                <legend> <img src="images/arrow.gif"> Wartung </legend>
                <div id="list_container">
                    <?php 
                        include('connect.php');
                        include('list_wartung.php'); 
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
    <div id="content_footer"></div>
    	<div id="footer">
      <p>Copyright &copy; Wellnitz & Streichert</p>
    </div>
  </div>
</body>
</html>


//Ende geschützter Bereich, wenn nicht angemeldet, dann einloggen
<?php
	if(!isset($_SESSION[$user])) {
		}else {
?>
		Bitte erst einloggen, <a href="anmeldung.php">Hier</a>
<?php
		}
?>
