
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
 </form>
 </div>
</div><!--main-wrapper-->

</body>
</html>



