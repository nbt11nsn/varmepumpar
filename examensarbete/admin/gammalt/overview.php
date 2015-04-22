
<!DOCTYPE html>
<html>
<head>

<?php
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
<link rel="stylesheet" type="text/css" media="Print"  href="css/print.css">
<script language="javascript" type="text/javascript" src = "include/print.js?"></script>
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
		<a href="overview.php"><input type="button" name ="next" value="Översikt" onclick="">
		<a href="printoverview.php"><input type="button" name ="next" value="Skriv ut ansökan" onclick="">
	<?php 
	$isqlpers = "SELECT * FROM person, fakturamottagare, fastighet, varmepump, borrfirma, installator";
	?>
	<?php 	
	$iresult = mysqli_query($con, $isqlpers);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {
echo '<div id="infoframeoverview">	
<h1 id ="overviewareatitle">Sökande</h1>
<div id ="applicantframe">

<div id ="first">

<div id ="overviewtitle">Förnamn</div>
<input type="box" value ="'.$irows2["fornamn"].'" name ="fornamn" id ="overviewboxlong"/>
<div id ="overviewtitle">Efternamn</div>
<input type="box" value ="'.$irows2["efternamn"].'" name ="efternamn" id ="overviewboxlong"/>
<div id ="overviewtitle">Utdelningsadress</div>
<input type="box" value ="'.$irows2["adress"].'" name ="utdelningsadress" id ="overviewboxlong"/>
</div>

<div>
<div id ="overviewtitle">Person-/Organisationsnummer</div>
<input type="box" value ="'.$irows2["persnum"].'" name ="persnum" id ="overviewboxsmall"/>
<div id ="overviewtitle">Telefonnummer</div>
<input type="box" value ="'.$irows2["tele"].'" name ="tele" id ="overviewboxsmall"/>
<div id ="overviewtitle">Mobilnummer</div>
<input type="box" value ="'.$irows2["alt_tele"].'" name ="mobil" id ="overviewboxsmall"/>
</div>
		
<div id ="second">
<div id ="overviewtitle">Postnummer</div>
<input type="box" value ="'.$irows2["postnum"].'" name ="postnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort</div>
<input type="box" value ="'.$irows2["postort"].'" name ="postort" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">E-Postadress</div>
<input type="box" value ="'.$irows2["epost"].'" name ="epost" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Fakturamottagare(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_namn"].'" name ="fakt_namn" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Organisations-/Postnummer(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_persnum"].'" name ="fakt_persnum" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Utdelningsadress(data,box,etc.)</div>
<input type="box" value ="'.$irows2["fakt_adress"].'" name ="fakt_adress" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postnum"].'" name ="fakt_postnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postort"].'" name ="fakt_postort" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Fastighet där installation skall ske</h1>
<div id ="applicantframe">

<div id ="second">
<div id ="overviewtitle">Fastighetsbeteckning</div>
<input type="box" value ="'.$irows2["fastighetsbeteckning"].'" name ="fastighetsbeteckning" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Fastighetens adress(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_adress"].'" name ="fastighet_adress" id ="overviewboxmedium"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_postnr"].'" name ="fastighet_postnr" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Postort(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_postort"].'" name ="fastighet_postort" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Anläggning</h1>
<div id ="applicantframe">
<div id ="overviewtitle">Typ av anläggning</div>
<input type="box" value ="'.$irows2["anlaggning"].'" name ="anlaggning" id ="overviewboxfull"/>

<div id ="second">
<div id ="overviewtitle">Riktning av borrhål(0&deg = rätt ned)</div>
<input type="box" value ="'.$irows2["vinkel"].'" name ="vinkel" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Effekt, kW</div>
<input type="box" value ="'.$irows2["effekt"].'" name ="effekt" id ="overviewboxsmall"/>
</div>
</div>
<div id="makespace"></div>
<h1 id ="overviewareatitle2">Övrigt</h1>
<div id ="applicantframe">

<div id ="thirdframe">
<div id ="overviewtitle">Borrdjup</div>
<input type="box" value ="" name ="borrdjup" id ="overviewboxsmini"/>
</div>

<div id ="thirdframe">
<div id ="overviewtitle">Köldbärartyp</div>
<input type="box" value ="" name ="kolbarartyp" id ="overviewboxsmini"/>
</div>

<div id ="thirdframe">
<div id ="overviewtitle">Kölmedietyp</div>
<input type="box" value ="" name ="koldmedietyp" id ="overviewboxsmini"/>
</div>

<div>
<div id ="overviewtitle">Kölmediemängd</div>
<input type="box" value ="" name ="koldmediemangd" id ="overviewboxsmini"/>
</div>

<div id ="second">
<div id ="overviewtitle">Finns anslutning till kommunalt vatten</div>
<input type="box" value ="'.$irows2["q1"].'" name ="q1" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Finns anslutning till kommunalt avlopp</div>
<input type="box" value ="'.$irows2["q2"].'" name ="q2" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Fastigheten ligger inom skyddsområde för dricksvattentäkt</div>
<input type="box" value ="'.$irows2["q3"].'" name ="q3" id ="overviewboxfull"/>
</div>

<div id ="third">
<div id ="overviewtitle">Fastigheten har tidigare haft oljeuppvärmning</div>
<input type="box" value ="'.$irows2["q4"].'" name ="q4" id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Borrare</h1>
<div id ="applicantframe">

<div id ="second">
<div id ="overviewtitle">Brunnsborrare som anlitas</div>
<input type="box" value ="'.$irows2["borr_namn"].'" name ="borr_namn" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Telefon(även riktnr)</div>
<input type="box" value ="'.$irows2["borr_tele"].'" name ="borr_tele" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Certifierad</div>
<input type="box" value ="'.$irows2["borr_certifiering"].'" name ="borr_certifiering" id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Installatör</h1>
<div id ="applicantframe">

<div id ="second">
<div id ="overviewtitle">VVS-installatör som avses anlitas</div>
<input type="box" value ="'.$irows2["install_namn"].'" name ="install_namn" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Telefon(även riktnr)</div>
<input type="box" value ="'.$irows2["install_tele"].'" name ="install_tele" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Certifierad</div>
<input type="box" value ="'.$irows2["install_certifiering"].'" name ="install_certifiering" id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Bilagor</h1>
<div id ="applicantframe">

<div id ="third">
<div id ="overviewtitle">Karta skickas via post</div>
<input type="box" value ="" name ="skickakarta" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Bifogad karta</div>
<input type="box" value ="" name ="bifogakarta" id ="overviewboxmedium"/>
</div>
</div>';
		}	
    }
		?>
		</div>

</div><!--main-wrapper-->
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
require_once("include/footer.php");
?>
</body>
</html>



