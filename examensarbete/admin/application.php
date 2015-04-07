<?php
SESSION_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<?php
// tar bort all form av felrapportering
// defined('THE_ERROR') || define('THE_ERROR', TRUE);
// require_once('include/no_error.php');

// koppla upp mot databas
// defined('THE_DB') || define('THE_DB', TRUE);
// define('THE_DB', TRUE);
// require_once('../db.php');
//////defined('THE_SESSION') || define('THE_SESSION', TRUE);
//////require_once('include/checksession.php');
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
</head>
<body>

<div id="main-wrapper">
<?php
defined('THE_MENUE') || define('THE_MENUE', TRUE);
require_once("include/menuebar.php");
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../db.php');

?>

<div id="infoframe">

  <form>


	<fieldset>
		<legend><b>Sökande</b></legend>	

		<label for="namn">Namn: </label>
		<input required type="text" align="left"  maxlength="50" value = ""  name="namn" id="requiredtextframe" />

				
		<label for="persnummer">Personnummer/organisationsnummer: </label>
		<input required type="text" value = "" name = "persnummer" id = "requiredtextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input required type="text" value = "" name = "adress" id = "requiredtextframe"/>
			
		<label for="postnummer">Postnummer: </label>
		<input required type="text" value = "" name = "postnummer" id = "requiredtextframe"/>
		
		<label for="port">Postort: </label>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input required type="text" value = "" name = "teledag" id = "requiredtextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input type="text" value = "" name = "alttele" id = "opentextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input required type="text" value = "" name = "epost" id = "opentextframe"/>
	</fieldset>	

	<fieldset>		
		<legend><b>Borrfirma</b></legend>	
		<label for="sitac">SITACS certifieringsnummer: </label>
	  <input required type="text" value = "" name = "sitac" id = "requiredtextframe"/>
		
		<label for="fnamn">Företagsnamn: </label>
		<input required type="text" value = "" name = "fnamn" id = "requiredtextframe"/>
		
		<label for="namn">Namn: </label>
		<input required type="text" value = "" name = "namn" id = "requiredtextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input required type="text" value = "" name = "adress" id = "requiredtextframe"/>
			
		<label for="postnummer">Postnummer: </label>
		<input required type="text" value = "" name = "postnummer" id = "requiredtextframe"/>
		
		<label for="port">Postort: </label>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input required type="text" value = "" name = "teledag" id = "requiredtextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input required type="text" value = "" name = "alttele" id = "opentextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input required type="text" value = "" name = "epost" id = "opentextframe"/>
	</fieldset>	
		
	<fieldset>		
		<legend><b>Installatör</b></legend>	
		<label for="namn">Namn: </label>
		<input required type="text" value = "" name = "namn" id = "requiredtextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input required type="text" value = "" name = "adress" id = "requiredtextframe"/>
			
		<label for="postnummer">Postnummer: </label>
		<input required type="text" value = "" name = "postnummer" id = "requiredtextframe"/>
		
		<label for="port">Postort: </label>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input required type="text" value = "" name = "teledag" id = "requiredtextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input required type="text" value = "" name = "alttele" id = "opentextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input required type="text" value = "" name = "epost" id = "opentextframe"/>
	</fieldset>	
		
	<fieldset>		
		<legend><b>Uppgifter om värmepump</b></legend>	
		<label for="fab">Fabrikat: </label>
		<input required type="text" value = "" name = "fab" id = "requiredtextframe"/>
		
		<label for="mod">Modell: </label>
		<input required type="text" value = "" name = "mod" id = "requiredtextframe"/>
			
		<label for="eff">Effekt, kW: </label>
		<input required type="text" value = "" name = "eff" id = "requiredtextframe"/>
		
		<label for="port">Typ av köldmedium: </label>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		
		<label for="kmed">Mängd köldmedium, kg: </label>
		<input required type="text" value = "" name = "kmed" id = "requiredtextframe"/>
		
		<label for="kollvol">Total volym köldbärarvätska i kollektorn, liter: </label>
		<input required type="text" value = "" name = "kollvol" id = "requiredtextframe"/>
		
		<label for="frostskyddnamn">Frostskyddsmedel i köldbärarvätskan namn: </label>
		<input required type="text" value = "" name = "frostskyddnamn" id = "requiredtextframe"/>
		
		<label for="frostskyddfabrikat">Frostskyddsmedel i köldbärarvätskan fabrikat: </label>
		<input required type="text" value = "" name = "frostskyddfabrikat" id = "requiredtextframe"/>
		
		<label for="frostskyddandel">Andel frostskyddsmedel i köldbärarvätskan, %: </label>
		<input required type="text" value = "" name = "frostskyddandel" id = "requiredtextframe"/>
	</fieldset>	
	  </form>	
	<fieldset>		
		<legend><b>Karta</b></legend>
		
		<label for="alttele">Jag skickar kartan via post </label>
		<input type='checkbox' class='checkbox_';
		
	<div class="upload_pdf" >
		<form id="upload_form" enctype="multipart/form-data" method="post" action="">
	<ul>
		<li class="center"><label for="pdf_fil">Ladda upp en Faktura</label>
		<input required type="file" name="pdf_fil" id="pdf_fil"/></li>
			<li class="center"><input type="reset" name="rst" id="rst" value="Återställ" />
		<input type="submit" id="upfak" name="upfak" accept="application/pdf" value="Ladda upp Faktura" /></li></ul>
    </fieldset></form>
</div></fieldset>	
</div>
 </form>
</div><!--main-wrapper-->


</body>
</html>



