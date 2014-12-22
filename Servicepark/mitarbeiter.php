<?php
include("connect.php");	
?>


<!DOCTYPE HTML>
<html>

<head>
  <title>Mitarbeiter</title>
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
          <li class="selected"><a href="mitarbeiter.php">Mitarbeiter</a></li>
          <li><a href="maschinen.php">Maschinen</a></li>
          <li><a href="betriebsdaten.php">Betriebsdaten</a></li>
	  <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <h2>Stammdaten</h2>
        <p>erfassen von Mitarbeiterstammdaten:
       
	    <Form action="add_member.php" method="post">
          <table style="width:100%; border-spacing:0;">
            <tr>
              <th>Name</th>
              <td><input type="text" name="user"/></td>
            </tr>
            <tr>
              <th>Telefon</th>
              <td><input type="text" name="telefon"/></td>
            </tr>
            <tr>
              <th>Mitarbeiterrolle</th>
              <td><select name="typ"/>
                       <option value="1">Administrator (1)</option>
                       <option value="2">Service (2)</option>
                       <option value="3">Nutzer (3)</option>
                  </select>
              </td>
            </tr>
            <tr>
              <th>Anwenderrolle</th>
              <td><select name="recht"/>
                       <option value="1">Administrator (1)</option>
                       <option value="2">Service (2)</option>
                       <option value="3">Nutzer (3)</option>
                  </select>
              </td>
            </tr>
            <tr>
              <th>Passwort</th>
              <td><input type="text" name="passwort"/></td>
            </tr>
            <tr>
              <th></th>
              <td align="right"><input type="submit" value="Hinzufügen"/></td>
            </tr>
          </table>
          
        </Form></p>
		  <fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Mitarbeiter </legend>
                <div id="list_container">
                    <?php 
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

