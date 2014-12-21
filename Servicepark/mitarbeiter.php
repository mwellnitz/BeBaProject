<?php
session_start();
include("connect.php");
?>


<!DOCTYPE HTML>
<html>

<head>
  <title>Mitarbeiter</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css" />
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
          <li class="selected"><a href="mitarbeiter.php">Mitarbeiter</a></li>
          <li><a href="Maschinen.php">Maschinen</a></li>
          <li><a href="Betriebsdaten.php">Betriebsdaten</a></li>
          <li><a href="anmeldung.php">Sign In</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <h2>Stammdaten</h2>
        <p>Bereits erfasste Mitarbeiterstammdaten:</p>
        <table style="width:100%; border-spacing:0;">
		<Form action="add_member.php" method="post">
         <tr><th>Name<input type="VARCHAR(32) " name="user"/></th><th>Telefon<input type="INTEGER"" name="telefon"/></th><th>Mitarbeitertyp<input type="INTEGER" name="typ"/></th><th>Rechtetyp<input type="INTEGER" name="recht"/></th><th>Passwort<input type="VARCHAR(32)" name="passwort"/></th><th><input type="submit" value="Add"/></th><th></th></tr>
          </form>
		  </table>
		  <table>
		  <tr><th>Rechtetyp</th><th>Typ 1 = Administrator</th><th>Typ 2 = Service</th><th>Typ 3 = Nutzer</th></tr>
		  <tr><th>Mitarbeitertyp</th><th>Typ 1 = Administrator</th><th>Typ 2 = Service</th><th>Typ 3 = Nutzer</th></tr>
		  </table>
		  <fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Mitarbeiter </legend>
                <div id="list_container">
                    <?php 
                        include('connect.php');
                        include('list_members.php'); 
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

<?php
	if(!isset($_SESSION[$user])) {
		}else {
?>
		Bitte erst einloggen, <a href="anmeldung.php">Hier</a>
<?php
		}
?>