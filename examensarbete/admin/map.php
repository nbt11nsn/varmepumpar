
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
<div>  
<input type='checkbox' class='checkbox_' id = "chkbox";	
		<label for="skickakarta">Jag skickar kartan via post </label>
		
</div>
<div>
Detta är vad som är ett krav att vara ifyllt på kartan för att tillstånd skall beviljas:<br>
1. Markering vart värmepumpen skall placeras måste markeras<br>
2. Om närliggande vattentäkter finns inom 50m från borrhål skall dessa markeras<br>
3. Om närliggande värmepumpar/borrhål finns inom 50m från borrhål skall dessa markeras<br>
4. Om närliggande avloppsanläggningar inom 50m från borrhål finns skall dessa markeras<br>
5. Om enskild brunn finns måste detta markeras<br>
6. Avstånd från borrhål till avloppsanläggning måste markeras<br>
7. Om vattenbrunn finns, är den då borrad eller grävd?<br>
8. Om vattentäkt finns, är den då borrad eller grävd?<br>
9. Om det redan finns en anläggning och en ny skall installeras skall uppgifter om avståndet mellan dessa redovisas<br>
10. Om enskilt infilterande avloppsanläggningar finns måste det markeras på kartan vart infiltrationen är samt avståndet mellan infiltration till borrhålet<br>
11. Avstånd från brunn till avloppsanläggning måste markeras<br>
12. Om eventuella delar av avloppet ligger inom skyddsområde måste detta markeras<br>

<br>
<br>
13. om skyddsåtgärder behöver göras tänker jag göra följande:
<div>
textruta där kunden kan skriva fritt(max 1000 ord)
</div>





</div>
	<div id ="pdf_title">
	<input type='checkbox' class='checkbox_' id = "chkbox";	
	<label for="godkännande" >Jag är införstådd i vad som måste fyllas i på kartan för att inte behöva skicka in kompletterande uppgifter. Jag är även införstådd i att detta måste vara tydligt markerat och skrivet</label>	

	</div>
	
  	<div>	
		<form><input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;"></form>
		<form action="heatPump.php"><input type="submit" value="Nästa"></form>
		</div>
</div><!--main-wrapper-->

</body>
</html>



