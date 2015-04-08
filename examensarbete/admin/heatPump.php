
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
  <h1 id = "smallTitle">Värmepump</h1>
		
		<div id = "rowfix">
		<label for="fab">Fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "fab" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="mod">Modell</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "mod" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="eff">Effekt, kW</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "eff" id = "requiredtextframe"/>
		</div>
		 
		<div id = "rowfix">
		<label for="port">Typ av köldmedium</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "port" id = "requiredtextframe"/>
		</div>
		  
		<div id = "rowfix">
		<label for="kmed">Mängd köldmedium, kg</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "kmed" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="kollvol">Total volym köldbärarvätska i kollektorn, liter</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "kollvol" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddnamn">Frostskyddsmedel i köldbärarvätskan, namn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddnamn" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddfabrikat">Frostskyddsmedel i köldbärarvätska, fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddfabrikat" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddandel">Andel frostskyddsmedel i köldbärarvätska, %</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddandel" id = "requiredtextframe"/>
		</div>	
 </form>
 </div>
</div><!--main-wrapper-->

</body>
</html>



