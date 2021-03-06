<?php
include("connect.php");	
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Betriebsdaten</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
          <li><a href="mitarbeiter.php">Mitarbeiter</a></li>
          <li><a href="maschinen.php">Maschinen</a></li>
          <li class="selected"><a href="betriebsdaten.php">Betriebsdaten</a></li>
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
	<Form action="add_laufzeiten.php" method="post">
        <table style="width:100%; border-spacing:0;">
          <tr>
		<th>idBetriebszeiten</th>
		<td>
		    <input type="text" name="idBetriebszeiten"/>
		</td>
	  </tr>
	  <tr>
		<th>idMaschinen</th>
		<td>
		    <input type="text" name="Maschienen_idMaschienenanan"/>
		</td>
	  </tr>
	  <tr>
		<th>Mitarbeiterid</th>
		<td>
		<input type="text" name="Mitarbeiter_idMitarbeiter"/>
		</td>
	  </tr>
	  <tr>
		<th>Laufzeitvon</th>
		<td>
		<input type="text" name="Laufzeitvon"/>
		</td>
	  </tr>
	  <tr>
		<th>Laufzeitbis</th>
		<td>
		<input type="text" name="Laufzeitbis"/>
		</td>
	  </tr>
	  <tr>
		<th></th>
		<td align="right"><input type="submit" value="Hinzufügen"/>
		</td>
	  </tr>
	</table>
	</form>
		<fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Laufzeit </legend>
                <div id="list_container">
                    <?php 
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
       
	   
	    <Form action="add_maschinenwartung.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>idMaschinen</th>
              <th>Mitarbeiterid</th>
              <th>Datum</th>
              <th>Arbeitsbeschreibung</th>
            </tr>
            <tr>
              <td><input type="text" name="Maschienen_idMaschienenanan"/></td>
              <td><input type="text" name="Mitarbeiter_idMitarbeiter"/></td>
              <td><input type="text" name="Datum"/></td>
              <td><input type="text" name="Arbeitsbeschreibung"/></td>
            <tr>
          </table>
          <input type="submit" value="Add"/>
        </Form>
	
		 
		 <fieldset class="field_container"> 
                <legend> <img src="images/arrow.gif"> Wartung </legend>
                <div id="list_container">
                    <?php 
                        include('list_maschinenwartung.php'); 
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
