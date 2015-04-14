
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

	<form action="" method="post" id = "postContracts">	
		<?php 

	$isql = "SELECT * FROM person";
	$isql2 = "SELECT * FROM fastighet";
	$isql3 = "SELECT * FROM varmepump";
	$isql4 = "SELECT * FROM borrfirma";
	$isql5 = "SELECT * FROM installator";
			
	$iresult = mysqli_query($con, $isql);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   $test = $irows2['namn'];
	   echo '	
<h1 id = "smallTitle">Översikt</h1>
  <fieldset>
  <legend id "overview">Personuppgifter</legend> ';
  
  echo ' <label for="namn">Namn: </label>'; echo $irows2['namn'];
  echo ' <br><label for="pnum">Personnummer/Organisationsnummer: </label>'; echo $irows2['persnum'];
  echo ' <br><label for="gadress">Gatuadress: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Postnummer: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="port">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alttele">Alternativ telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];';
  </fieldset><br>
  
    <fieldset>
  <legend id "overview">Värmepump</legend> ';
  
  echo ' <br><br><label for="namn">Fabrikat: </label>'; echo $irows2['namn'];
  echo ' <br><label for="pnum">Modell: </label>'; echo $irows2['persnum'];
  echo ' <br><label for="gadress">Effekt, kW: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Typ av köldmedium: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="port">Mängd köldmedium, kg: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Total volym köldbärarvätska i kollektorn, liter: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alttele">Frostskyddsmedel i kölbärarvätska, namn: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">Frostskyddsmedel i kölbärarvätska, fabrikat: </label>'; echo $irows2['epost'];
  echo ' <br><label for="namn">Andel Frostskyddsmedel i kölbärarvätska, %: </label>'; echo $irows2['namn'];';
  </fieldset><br>
 
    <fieldset>
  <legend id "overview">Borrfirma</legend> ';
  
  echo ' <br><br><label for="namn">SITAC certifieringsnumer:: </label>'; echo $irows2['namn'];
  echo ' <br><label for="pnum">Företagsnamn: </label>'; echo $irows2['persnum'];
  echo ' <br><label for="gadress">Kontaktperson: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Gatuadress: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="epost">Postnummer: </label>'; echo $irows2['epost'];
  echo ' <br><label for="port">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alttele">Alternativ telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];';
  </fieldset><br>
  
    <fieldset>
  <legend id "overview">Installatör</legend> ';
  
  echo ' <br><br><label for="gadress">Kontaktperson: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Gatuadress: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="epost">Postnummer: </label>'; echo $irows2['epost'];
  echo ' <br><label for="port">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alttele">Alternativ telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];';
  </fieldset>
  
    <legend id "overview">Karta</legend> ';
  
  echo ' <br><br><label for="skickakarta">Jag har skickat kartan via post: </label>'; echo $irows2['namn'];
  echo ' <br><label for="bifogadkarta">Bifogad karta: </label>'; echo $irows2['persnum'];';
  </fieldset>  ';		
		}

		
	}
	  mysqli_free_result($iresult);	

	?>	
</div>
 </form>
</div><!--main-wrapper-->
</body>
</html>



