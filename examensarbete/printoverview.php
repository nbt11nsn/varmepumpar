<?php
  defined('THE_PRINTOVERVIEWPAGE') or die();
?>
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
<form method="get" action="overviewPage.php">
<button type="submit" id ="overviewbuttonsmall">Översikt</button>
</form>

<form method="get" action="printoverviewPage.php">
<button type="submit" id ="overviewbuttonbig">Utskriftsvänlig vy</button>
</form>

<form method="get" onclick="printDiv('printableArea')">
<button type="submit" id ="overviewbuttonsmall">Skriv ut</button>
</form>
<div id="main-wrapper">
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../db.php');
 
	$isqlpers = "SELECT * FROM person, fakturamottagare, fastighet, varmepump, borrfirma, installator where 
	person.ID = ".$_COOKIE['ID']." AND 
	fakturamottagare.ID = ".$_COOKIE['ID']." AND 
	fastighet.ID = ".$_COOKIE['ID']." AND 
	varmepump.ID = ".$_COOKIE['ID']." AND 
	borrfirma.ID = ".$_COOKIE['ID']." AND 
	installator.ID = ".$_COOKIE['ID']."";
	?>		
<div id="printableArea">
<div id ="printheader">
<div id ="printTitle">Tillstånd för inrättande av värmepumpsanläggning, ansökan</div>

<div id ="date">Datum: <?php
echo date("Y/m/d");
?></div>

<div id ="infotext">
<div id="infotext1">
<div id ="question">Har du frågor?</div>
<div id ="info">Samhällsbyggnad Gävle</div>
<div id ="info">Telefon 026-178000</div>
<div id ="info">samhallsbyggnad@gavle.se</div>
</div>
<div id="infotext2">
<div id ="question">Skickas till</div>
<div id ="info">Gävle kommun</div>
<div id ="info">Samhällsbyggnad Gävle</div>
<div id ="info">801 84 GÄVLE</div>
</div>
</div>
</div>

	<?php 	
	$iresult = mysqli_query($con, $isqlpers);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {
echo '<div id="infoframeoverview">	
<h1 id ="overviewareatitle">Sökande</h1>
<div id ="applicantframe1">

<div id ="first">
<div id ="overviewtitle">Förnamn</div>
<input type="box" value ="'.$irows2["fornamn"].'" name ="fornamn" readonly id ="overviewboxlong"/>
<div id ="overviewtitle">Efternamn</div>
<input type="box" value ="'.$irows2["efternamn"].'" name ="efternamn" readonly id ="overviewboxlong"/>
<div id ="overviewtitle">Utdelningsadress</div>
<input type="box" value ="'.$irows2["adress"].'" name ="utdelningsadress" readonly id ="overviewboxlong"/>
</div>

<div id ="firstsecond">
<div id ="overviewtitle2">Person-/Orgnr</div>
<input type="box" value ="'.$irows2["persnum"].'" name ="persnum" readonly id ="overviewboxsmall"/>
<div id ="overviewtitle2">Telefonnummer</div>
<input type="box" value ="'.$irows2["tele"].'" name ="tele" readonly id ="overviewboxsmall"/>
<div id ="overviewtitle2">Mobilnummer</div>
<input type="box" value ="'.$irows2["alt_tele"].'" name ="mobil" readonly id ="overviewboxsmall"/>
</div>
		
<div id ="first3">
<div id ="overviewtitle3">Postnummer</div>
<input type="box" value ="'.$irows2["postnum"].'" name ="postnum" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Postort</div>
<input type="box" value ="'.$irows2["postort"].'" name ="postort" readonly id ="overviewboxmedium2"/>
</div>

<div id ="third">
<div id ="overviewtitle4">E-Postadress</div>
<input type="box" value ="'.$irows2["epost"].'" name ="epost" readonly id ="overviewboxfull"/>
</div>

<div id ="first3">
<div id ="overviewtitle3">Fakturamottagare(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_namn"].'" name ="fakt_namn" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Person-/Orgnr(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_persnum"].'" name ="fakt_persnum" readonly id ="overviewboxmedium2"/>
</div>

<div id ="third">
<div id ="overviewtitle4">Utdelningsadress(data,box,etc.)</div>
<input type="box" value ="'.$irows2["fakt_adress"].'" name ="fakt_adress" readonly id ="overviewboxfull"/>
</div>


<div id ="first3">
<div id ="overviewtitle3">Postnummer(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postnum"].'" name ="fakt_postnum" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Postort(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postort"].'" name ="fakt_postort" readonly id ="overviewboxmedium2"/>
</div>
</div>

<h1 id ="overviewareatitle2">Fastighet där installation skall ske</h1>
<div id ="applicantframe2">
<div id ="first3">
<div id ="overviewtitle3">Fastighetsbeteckning</div>
<input type="box" value ="'.$irows2["fastighetsbeteckning"].'" name ="fastighetsbeteckning" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Alternativ adress)</div>
<input type="box" value ="'.$irows2["fastighet_adress"].'" name ="fastighet_adress" readonly id ="overviewboxmedium2"/>
</div>
<div id ="first3">
<div id ="overviewtitle3">Alternativ Postnummer)</div>
<input type="box" value ="'.$irows2["fastighet_postnr"].'" name ="fastighet_postnr" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Alternativ Postort</div>
<input type="box" value ="'.$irows2["fastighet_postort"].'" name ="fastighet_postort" readonly id ="overviewboxmedium2"/>
</div>
</div>

<h1 id ="overviewareatitle2">Anläggning</h1>
<div id ="applicantframe2">

<div id ="third">
<div id ="overviewtitle4">Typ av anläggning</div>
<input type="box" value ="'.$irows2["anlaggning"].'" name ="anlaggning" readonly id ="overviewboxfull"/>
</div>

<div id ="first3">
<div id ="overviewtitle3">Riktning av borrhål(0&deg = rätt ned)</div>
<input type="box" value ="'.$irows2["vinkel"].'" name ="vinkel" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Effekt, kW</div>
<input type="box" value ="'.$irows2["effekt"].'" name ="effekt" readonly id ="overviewboxmedium2"/>
</div>
</div>








<h1 id ="overviewareatitle2">Övrigt</h1>
<div id ="applicantframe3">

<div id ="thirdframe2">
<div id ="overviewtitlemini2">Borrdjup, m</div>
<input type="box" value ="'.$irows2["borrdjup"].'" name ="borrdjup" readonly id ="overviewboxsmini1"/>
</div>

<div id ="thirdframe">
<div id ="overviewtitlemini">Köldbärartyp</div>
<input type="box" value ="'.$irows2["typ_koldbarare"].'" name ="kolbarartyp" readonly id ="overviewboxsmini2"/>
</div>

<div id ="thirdframe">
<div id ="overviewtitlemini">Kölmedietyp</div>
<input type="box" value ="'.$irows2["typ_koldmedium"].'" name ="koldmedietyp" readonly id ="overviewboxsmini2"/>
</div>
<div id ="thirdframe">
<div id ="overviewtitlemini">Kölmediemängd</div>
<input type="box" value ="'.$irows2["mangd_koldmedium"].'" name ="koldmediemangd" readonly id ="overviewboxsmini3"/>
</div>
<div id ="first3">
<div id ="overviewtitle3">Finns anslutning till kommunalt vatten</div>
<input type="box" value ="'.$irows2["q1_avlopp"].'" name ="q1" readonly id ="overviewboxmedium"/>
</div>

<div id ="second2">
<div id ="overviewtitle3left">Finns anslutning till kommunalt avlopp</div>
<input type="box" value ="'.$irows2["q2_vatten"].'" name ="q2" readonly id ="overviewboxmedium2"/>
</div>

<div id ="third">
<div id ="overviewtitle4">Fastigheten ligger inom skyddsomåde för dricksvattentäkt</div>
<input type="box" value ="'.$irows2["q3_skyddsomrade"].'" name ="q3" readonly id ="overviewboxfull"/>
</div>

<div id ="third">
<div id ="overviewtitle4">Fastigheten har tidigare haft oljeuppvärmning</div>
<input type="box" value ="'.$irows2["q4_oljeuppvarmning"].'" name ="q4" readonly id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Borrare</h1>
<div id ="applicantframe2">

<div id ="first3">
<div id ="overviewtitle3">Brunnsborrare som anlitas</div>
<input type="box" value ="'.$irows2["borr_namn"].'" name ="borr_namn" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Telefon(även riktnr)</div>
<input type="box" value ="'.$irows2["borr_tele"].'" name ="borr_tele" readonly id ="overviewboxmedium2"/>
</div>

<div id ="third">
<div id ="overviewtitle4">Certifierad</div>
<input type="box" value ="'.$irows2["borr_certifiering"].'" name ="borr_certifiering" readonly id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Installatör</h1>
<div id ="applicantframe2">

<div id ="first3">
<div id ="overviewtitle3">VVS-installatör som avses anlitas</div>
<input type="box" value ="'.$irows2["install_namn"].'" name ="install_namn" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Telefon(även riktnr)</div>
<input type="box" value ="'.$irows2["install_tele"].'" name ="install_tele" readonly id ="overviewboxmedium2"/>
</div>

<div id ="third">
<div id ="overviewtitle4">Certifierad</div>
<input type="box" value ="'.$irows2["install_certifiering"].'" name ="install_certifiering" readonly id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Bilagor</h1>
<div id ="applicantframe4">

<div id ="first3">
<div id ="overviewtitle3">Karta skickas via post</div>
<input type="box" value ="" name ="install_namn" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Bifogad karta</div>
<input type="box" value ="" name ="install_tele" readonly id ="overviewboxmedium2"/>
</div>
</div>

<h1 id ="overviewareatitle2">Avgifter</h1>
<div id ="applicantframe4">

<div id ="third">
<div id ="overviewtitle4">Certifierad</div>
<input type="box" value ="En avgift enligt kommunfullmäktiges fastställda taxa tas ut för handläggning av ansökan." name ="bifogakarta" readonly id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Personuppgiftslagen</h1>
<div id ="applicantframe4">

<div id ="third">
<div id ="overviewtitle4">Certifierad</div>
<input type="box" value ="Ovanstående personuppgifter kommer att behandlas enligt personuppgiftslagen (PUL)." name ="bifogakarta" readonly id ="overviewboxfull"/>
</div>
</div>

<h1 id ="overviewareatitle2">Underskrift</h1>
<div id ="applicantframe2">


<div id ="third">
<div id ="overviewtitle4">Datum</div>
<input type="box" value ="" name ="" readonly id ="overviewboxfull"/>
</div>

<div id ="first3">
<div id ="overviewtitle3">Underskrift</div>
<input type="box" value ="" name ="" readonly id ="overviewboxmedium"/>
</div>
<div id ="second2">
<div id ="overviewtitle3left">Namnförtydligande</div>
<input type="box" value ="" name ="" readonly id ="overviewboxmedium2"/>
</div>
</div>
</div>';
		}	
    }
		?>

<!--main-wrapper-->

</div>
</body>
</html>



