<!DOCTYPE html>
<html>
<head>
<?php
// tar bort all form av felrapportering
// defined('THE_ERROR') || define('THE_ERROR', TRUE);
// require_once('include/no_error.php');

// koppla upp mot databas
// defined('THE_DB') || define('THE_DB', TRUE);
// define('THE_DB', TRUE);
// require_once('../db.php');

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
<?php 		
	   echo '	   
	   <fieldset>
		<legend><b>Vad ska man göra innan ansökan</b></legend>		
		</fieldset>	';			
?>	
	<div>	
		<form action="buildingInfo.php"><input type="submit" value="Nästa"></form>
		</div>	
		</div>	
</div>
 </form>
</div><!--main-wrapper-->


</body>
</html>



