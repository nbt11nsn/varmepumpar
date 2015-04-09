
<!DOCTYPE html>
<html>
<head>

<?php
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
</head>
<body>
<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
require_once("include/header.php");
?>
<div id="main-wrapper">
<?php
defined('THE_MENUE') || define('THE_MENUE', TRUE);
require_once("include/menuebar.php");
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../db.php');
?>
 <div id="infoframe">
  <h1 id = "smallTitle">Översikt</h1>
  <fieldset>
  <legend id "overview">Personuppgifter</legend>
  
  <label for="namn">Namn: </label><br>
  <label for="pnum">Personnummer/Organisationsnummer: </label><br>
  <label for="gadress">Gatuadress: </label><br>
  <label for="postnum">Postnummer: </label><br>
  <label for="port">Postort: </label><br>
  <label for="tele">Telefonnummer dagtid: </label><br>
  <label for="alttele">Alternativ telefonnummer: </label><br>
  <label for="epost">E-postadress: </label>
  </fieldset><br>
  
    <fieldset>
  <legend>Karta</legend>
  <label for="skickakarta">Jag skickar kartan via post: </label><br>
  <label for="bifogadkarta">Bifogad karta: </label><br>
  </fieldset><br>
  
    <fieldset>
  <legend>Värmepump</legend>
  
  <label for="namn">Fabrikat: </label><br>
  <label for="namn">Modell: </label><br>
  <label for="namn">Effekt, kW: </label><br>
  <label for="namn">Typ av köldmedium: </label><br>
  <label for="namn">Mängd köldmedium, kg: </label><br>
  <label for="namn">Total volym köldbärarvätska i kollektorn, liter: </label><br>
  <label for="namn">Frostskyddsmedel i kölbärarvätska, namn: </label><br>
  <label for="namn">Frostskyddsmedel i kölbärarvätska, fabrikat: </label><br>
  <label for="namn">Andel Frostskyddsmedel i kölbärarvätska, %: </label><br>
  </fieldset><br>
  
    <fieldset>
  <legend>Borrfirma</legend>
  
  <label for="namn">SITAC certifieringsnumer: </label><br>
  <label for="namn">Företagsnamn: </label><br>
  <label for="namn">Kontaktperson: </label><br>
  <label for="gadress">Gatuadress: </label><br>
  <label for="postnum">Postnummer: </label><br>
  <label for="port">Postort: </label><br>
  <label for="tele">Telefonnummer dagtid: </label><br>
  <label for="alttele">Alternativ telefonnummer: </label><br>
  <label for="epost">E-postadress: </label>
  </fieldset><br>
  
    <fieldset>
  <legend>Installatör</legend>
  <label for="namn">Kontaktperson: </label><br>
  <label for="gadress">Gatuadress: </label><br>
  <label for="postnum">Postnummer: </label><br>
  <label for="port">Postort: </label><br>
  <label for="tele">Telefonnummer dagtid: </label><br>
  <label for="alttele">Alternativ telefonnummer: </label><br>
  <label for="epost">E-postadress: </label>
  </fieldset>
  
 </form>
 
   	<div>	
		<form><input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;"></form>
		<form action="after.php"><input type="submit" value="Skicka"></form>
		</div>
 </div>
</div><!--main-wrapper-->

</body>
</html>



