<?php
include("connect.php");	
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Maschinen</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
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
          <li><a href="mitarbeiter.php">Mitarbeiter</a></li>
          <li class="selected"><a href="maschinen.php">Maschinen</a></li>
          <li><a href="betriebsdaten.php">Betriebsdaten</a></li>
	  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <h2>Stammdaten</h2>
        <p>Erfassen von Maschinen:</p>
        
		<Form action="add_maschinen.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>StandortID</th>
              <th>HerstellerID</th>
              <th>Kategorie</th>
              <th>Anschaffungsdatum</th>
            </tr>
            <tr>
              <td><input type="text" name="Standorte_idStandorte"/></td>
              <td><input type="text" name="Hersteller_idHersteller"/></td>
              <td><input type="text" name="Kategorie_idKategorie"/></td>
              <td><input type="text" name="Anschaffungsdatum"/></td>
            <tr>
          </table>
          <input type="submit" value="Add"/>
        </Form>	
		
		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Maschinen </legend>
                <div id="list_container">
                    <?php 
                        include('list_maschinen.php'); 
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
	<div id="site_content">
      <div id="content">
        <p>Erfassen von Herstellern:</p>
       
		<Form action="add_hersteller.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>Name</th>
              <th>Anschrift</th>

            </tr>
            <tr>
              <td><input type="text" name="name"/></td>
              <td><input type="text" name="anschrift"/></td>
            <tr>
          </table>
          <input type="submit" value="Add"/>
        </Form>	

		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Hersteller </legend>
                <div id="list_container">
                    <?php 
                        include('list_hersteller.php'); 
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
	<div id="site_content">
      <div id="content">
        <p>Erfassen von Kategorie:</p>
        
		<Form action="add_kategorie.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>Name</th>
            </tr>
            <tr>
              <td><input type="text" name="name"/></td>
            <tr>
          </table>
          <input type="submit" value="Add"/>
        </Form>	
		
			
		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Kategorie </legend>
                <div id="list_container">
                    <?php 
                        include('list_kategorie.php'); 
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
	<div id="site_content">
      <div id="content">
        <p>Erfassen von Standorten:</p>
        
<Form action="add_standort.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>Halle</th>
              <th>Platznr</th>
            </tr>
            <tr>
              <td><input type="text" name="Halle"/></td>
              <td><input type="text" name="Platznr"/></td>
            <tr>
          </table>
          <input type="submit" value="Add"/>
        </Form>	
		
		
		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Standorte </legend>
                <div id="list_container">
                    <?php 
                        include('list_standort.php'); 
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