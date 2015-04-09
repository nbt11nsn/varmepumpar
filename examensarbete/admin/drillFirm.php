
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
 
  <h1 id = "smallTitle">Borrfirma</h1>	
  
		<div id = "rowfix">
		<label for="sitac">SITACS certifieringsnummer</label><strong id="startDot">*</strong>
	    <input required type="text" value = "" name = "sitac" id = "requiredtextframe"/>
	    </div>
		
		<div id = "rowfix">
		<label for="fnamn">Företagsnamn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "fnamn" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="namn">Kontaktperson</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "namn" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="adress">Gatuadress</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "adress" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="postnummer">Postnummer</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "postnummer" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="port">Postort</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="teledag">Telefon dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "teledag" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer)
		<input type="text" value = "" name = "alttele" id = "opentextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="epost">E-postadress</label>
		<input type="text" value = "" name = "epost" id = "opentextframe"/>
		</div>	

  	<div>	
		<form><input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;"></form>
		<form action="installFirm.php"><input type="submit" value="Nästa"></form>
		</div>		
 </form>
 </div>
</div><!--main-wrapper-->

</body>
</html>



