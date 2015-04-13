
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
 <h1 id = "smallTitle">Fastighetsuppgifter</h1>

	<div id = "rowfix">
		<label for="namn">Fastighetsbeteckning </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = ""  name="namn" placeholder="ex. Eldkvarnen 1" id="requiredtextframe"/>
		</div>
	 <div id = "rowfix">			
		<label for="persnummer">Fastighetens adress(om annan än sökandes adress)</label>
		<input type="text" value = "" name = "persnummer" placeholder="ex. Brunnsgatan 59" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">		
		<label for="postnummer">Postnummer(om annan än sökandes postnummer)</label>
		<input type="text" value = "" name = "postnummer" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="port">Postort(om annan än sökandes postort)</label>
		<input type="text" value = "" name = "port" id = "requiredtextframe"/>
		</div>
		
	<div>	
		<form><input type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;"></form>
		<form action="personalData.php"><input type="submit" value="Nästa" onclick="document.getElementById('checked1').style.backgroundColor = 'green';"></form>
		</div>

 </div>

</script>
</div><!--main-wrapper-->

</body>
</html>



