
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
  <h1 id = "smallTitle">Bifoga karta</h1>				
		<label for="chkbox">Jag skickar kartan via post </label>
		<input type='checkbox' class='checkbox_' id = "chkbox";	

	<form id="upload_form" enctype="multipart/form-data" method="post" action="">
	<div id ="pdf_title">
	<label for="pdf_fil" >Ladda upp en Karta</label>	
	</div>
	
	<div id ="upload_div">		
	<input type="file" name="pdf_fil" id="pdf_fil">
	<input type="reset" id="rst" name="rst"  value='Återställ' />
	<input type="submit" id="map" name="map" accept="application/pdf" value="Ladda upp Karta" /></div>		
 </form>
 </div>
  	<div>	
		<form><input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;"></form>
		<form action="heatPump.php"><input type="submit" value="Nästa"></form>
		</div>
</div><!--main-wrapper-->

</body>
</html>



