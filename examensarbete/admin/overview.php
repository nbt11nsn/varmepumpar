
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
<div id="infoframeoverview">	
<h1 id ="overviewareatitle">Sökande</h1>
<div id ="applicantframe">

<div id ="first">

<div id ="overviewtitle">Förnamn</div>
<input type="box" value ="" name ="fornamn" id ="overviewboxlong"/>
<div id ="overviewtitle">Efternamn</div>
<input type="box" value ="" name ="efternamn" id ="overviewboxlong"/>
<div id ="overviewtitle">Utdelningsadress</div>
<input type="box" value ="" name ="utdelningsadress" id ="overviewboxlong"/>
</div>

<div>
<div id ="overviewtitle">Person-/Organisationsnummer</div>
<input type="box" value ="" name ="persnum" id ="overviewboxsmall"/>
<div id ="overviewtitle">Telefonnummer</div>
<input type="box" value ="" name ="tele" id ="overviewboxsmall"/>
<div id ="overviewtitle">Mobilnummer</div>
<input type="box" value ="" name ="mobil" id ="overviewboxsmall"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer</div>
<input type="box" value ="" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort</div>
<input type="box" value ="" name ="port" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">E-Postadress</div>
<input type="box" value ="" name ="epost" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Fakturamottagare(om annan än ovanstående)</div>
<input type="box" value ="" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Organisations-/Postnummer(om annan än ovanstående)</div>
<input type="box" value ="" name ="port" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Utdelningsadress(data,box,etc.)</div>
<input type="box" value ="" name ="epost" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än ovanstående)</div>
<input type="box" value ="" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort(om annan än ovanstående)</div>
<input type="box" value ="" name ="port" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Fastighet där installation skall ske</h1>
<div id ="applicantframe">

<div id ="second">
<div id ="overviewtitle">Fastighetsbeteckning</div>
<input type="box" value ="" name ="epost" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Fastighetens adress(om annan än utdelningsadress)</div>
<input type="box" value ="" name ="epost" id ="overviewboxmedium"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än utdelningsadress)</div>
<input type="box" value ="" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort(om annan än utdelningsadress)</div>
<input type="box" value ="" name ="port" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Anläggning</h1>
<div id ="applicantframe">
<div id ="overviewtitle">Typ av anläggning</div>
<input type="box" value ="" name ="epost" id ="overviewboxfull"/>

<div id ="second">
<div id ="overviewtitle">Vinkel/riktning av borrhål(0&deg = rätt ned. Markera riktning på karta)</div>
<input type="box" value ="" name ="epost" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Effekt</div>
<input type="box" value ="" name ="port" id ="overviewboxsmall"/>
</div>
</div>

<div id ="applicantframe">
<div id ="second">
<div>
<div id ="overviewtitle">Borrdjup</div>
<input type="box" value ="" name ="pnum" id ="overviewboxsmall"/>
</div>
<div>
<div id ="overviewtitle">Köldbärartyp</div>
<input type="box" value ="" name ="port" id ="overviewboxsmall"/>
</div>
<div>
<div id ="overviewtitle">Kölmedietyp</div>
<input type="box" value ="" name ="port" id ="overviewboxsmall"/>
</div>
<div>
<div id ="overviewtitle">Kölmediemängd</div>
<input type="box" value ="" name ="port" id ="overviewboxsmall"/>
</div>
</div>
</div>








	<?php 
	$isqlpers = "SELECT * FROM person, fakturamottagare";
	$isqlfastighet = "SELECT * FROM fastighet";
	$isqvarmepump = "SELECT * FROM varmepump";
	$isqlborr = "SELECT * FROM borrfirma";
	$isqlinstall = "SELECT * FROM installator";
	$isqlkarta = "SELECT * FROM karta";
	?>
	
	<h1 id = "smallTitle">Översikt</h1>
	
	<div id ="overviewforsta">	
	<div id = "forsta">
	<?php 	
	$iresult = mysqli_query($con, $isqlfastighet);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '	
	<fieldset>
	<legend id "overview">Fastighet</legend> ';
  
  echo ' <label for="fastighetsbeteckning">Fastighetsbeteckning: </label>'; echo $irows2['fastighetsbeteckning'];
  echo ' <br><label for="fastighet_adress">Adress: </label>'; echo $irows2['fastighet_adress'];
  echo ' <br><label for="fastighet_postnr">Postnummer: </label>'; echo $irows2['fastighet_postnr'];
  echo ' <br><label for="fastighet_postort">Postort: </label>'; echo $irows2['fastighet_postort'];
  echo '</fieldset><br>';
		}	
	}
	?>
	</div>

	<div id ="forsta">
	<?php
	mysqli_free_result($iresult);
		$iresult = mysqli_query($con, $isqlkarta);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '
<fieldset>
	<legend id "overview">Karta</legend> ';
  
   echo ' <label for="namn">Jag har skickat kartan via post: </label>'; echo $irows2['svar'];
   echo ' <br><label for="url">Bifogad karta: </label>'; echo $irows2['url']; 
   echo '</fieldset>'; 
		}
	}
	?>
	</div>
	</div>	

	<div id ="overviewandra">
	<div id ="forsta">	
	<?php 	
	$iresult = mysqli_query($con, $isqlpers);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '	
	<fieldset>
	<legend id "overview">Personuppgifter</legend> ';
  
  echo ' <label for="namn">Namn: </label>'; echo $irows2['namn'];
  echo ' <br><label for="persnum">Personnummer/Organisationsnummer: </label>'; echo $irows2['persnum'];
  echo ' <br><label for="adress">Gatuadress: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Postnummer: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="postort">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alt_tele">Alternativt telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];
  echo '</fieldset><br>';
		}	
	}
		?>
	</div>
	<div id ="forsta">
	<?php 
	mysqli_free_result($iresult);
	
		$iresult = mysqli_query($con, $isqlinstall);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '
<fieldset>
  <legend id "overview">Installatör</legend> ';
  echo ' <label for="kontaktperson">Kontaktperson: </label>'; echo $irows2['kontaktperson'];
  echo ' <br><label for="adress">Gatuadress: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Postnummer: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="postort">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alt_tele">Alternativt telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];
  echo '</fieldset><br>';
		}
	}
		?>
		</div>
		</div>
		
	<div id ="overviewtredje">	
	<div id ="forsta">
	<?php 
	mysqli_free_result($iresult);
	
		$iresult = mysqli_query($con, $isqvarmepump);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '
	<fieldset>
	<legend id "overview">Värmepump</legend> ';
  
  echo ' <label for="anlaggning">Anläggning: </label>'; echo $irows2['anlaggning'];
  echo ' <br><label for="fabrikat">Fabrikat: </label>'; echo $irows2['fabrikat'];
  echo ' <br><label for="modell">Modell: </label>'; echo $irows2['modell'];
  echo ' <br><label for="vinkel">Vinkel, &deg: </label>'; echo $irows2['vinkel'];
  echo ' <br><label for="effekt">Effekt, kW: </label>'; echo $irows2['effekt'];
  echo ' <br><label for="typ_koldmedium">Typ av köldmedium: </label>'; echo $irows2['typ_koldmedium'];
  echo ' <br><label for="mangd_koldmedium">Mängd köldmedium, kg: </label>'; echo $irows2['mangd_koldmedium'];
  echo ' <br><label for="volym_koldbararvatska">Total volym köldbärarvätska i kollektorn, liter: </label>'; echo $irows2['volym_koldbararvatska'];
  echo ' <br><label for="namn_koldbararvatska">Frostskyddsmedel i kölbärarvätska, namn: </label>'; echo $irows2['namn_koldbararvatska'];
  echo ' <br><label for="fabrikat_koldbararvatska">Frostskyddsmedel i kölbärarvätska, fabrikat: </label>'; echo $irows2['fabrikat_koldbararvatska'];
  echo ' <br><label for="andel_frostskyddsmedel">Frostskyddsmedel i kölbärarvätska, andel(%): </label>'; echo $irows2['andel_frostskyddsmedel'];
  echo '</fieldset><br>';
		}
	}
		?>
	</div>	
	<div id ="forsta">
	<?php 
	mysqli_free_result($iresult);
	
		$iresult = mysqli_query($con, $isqlborr);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {	
	   echo '
	       <fieldset>
	<legend id "overview">Borrfirma</legend> ';
  
  echo ' <label for="cert_num">SITAC certifieringsnummer: </label>'; echo $irows2['cert_num'];
  echo ' <br><label for="namn">Företagsnamn: </label>'; echo $irows2['namn'];
  echo ' <br><label for="kontaktperson">Kontaktperson: </label>'; echo $irows2['kontaktperson'];
  echo ' <br><label for="adress">Gatuadress: </label>'; echo $irows2['adress'];
  echo ' <br><label for="postnum">Postnummer: </label>'; echo $irows2['postnum'];
  echo ' <br><label for="postort">Postort: </label>'; echo $irows2['postort'];
  echo ' <br><label for="tele">Telefonnummer dagtid: </label>'; echo $irows2['tele'];
  echo ' <br><label for="alt_tele">Alternativt telefonnummer: </label>'; echo $irows2['alt_tele'];
  echo ' <br><label for="epost">E-postadress: </label>'; echo $irows2['epost'];
  echo '</fieldset><br>';
	   
		}
	}
	mysqli_free_result($iresult);
		?>
	</div>
</div>
</div><!--main-wrapper-->
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
require_once("include/footer.php");
?>
</body>
</html>



