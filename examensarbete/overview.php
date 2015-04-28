
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
<form method="get" action="overview.php">
    <button type="submit" id ="overviewbuttonsmall">Översikt</button>
</form>
<form method="get" action="printoverview.php">
    <button type="submit" id ="overviewbuttonbig">Formulär</button>
</form>

		
	<?php 
	$isqlpers = "SELECT * FROM person, fakturamottagare, fastighet, varmepump, borrfirma, installator";
	?>
	<?php 	
	$iresult = mysqli_query($con, $isqlpers);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_assoc($iresult)) {
echo '<div id="infoframeoverview">	
<h1 id ="overviewareatitle3">Sökande</h1>
<div id ="applicantframe2">

<input type="text" value ="Namn:" readonly id = "infotextframe1"/>
<input type="text" value ="'.$irows2["fornamn"].' '.$irows2["efternamn"].'" readonly id = "infotextframe2"/>

<input type="text" value ="Adress:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["adress"].', '.$irows2["postnum"].' '.$irows2["postort"].'" name ="utdelningsadress" readonly id ="infotextframe2"/>

<input type="text" value ="Person-/Organisationsnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["persnum"].'" name ="persnum" readonly id ="infotextframe2"/>

<input type="text" value ="Telefonnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["tele"].'" name ="tele" readonly id ="infotextframe2"/>

<input type="text" value ="Mobilnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["alt_tele"].'" name ="mobil" readonly id ="infotextframe2"/>

<input type="text" value ="E-Postadress:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["epost"].'" name ="epost" readonly id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Fakturering</h1>
<div id ="applicantframe2">
<input type="text" value ="Fakturamottagare:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_namn"].'" name ="fakt_namn" readonly id ="infotextframe2"/>

<input type="text" value ="Person-/Organisationsnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_persnum"].'" name ="fakt_persnum" readonly id ="infotextframe2"/>

<input type="text" value ="Utdelningsadress(data,box,etc.):" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_adress"].', '.$irows2["fakt_postnum"].' '.$irows2["fakt_postort"].'" name ="utdelningsadress" readonly id ="infotextframe2"/>
</div>



<h1 id ="overviewareatitle3">Fastighet där installation skall ske</h1>
<div id ="applicantframe2">
<input type="text" value ="Fastighetsbeteckning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fastighetsbeteckning"].'" name ="fastighetsbeteckning" readonly id ="infotextframe2"/>

<input type="text" value ="Fastighetens adress:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fastighet_adress"].', '.$irows2["fastighet_postnr"].' '.$irows2["fastighet_postort"].'" name ="fastighet_adress" readonly id ="infotextframe2"/>
</div>


<h1 id ="overviewareatitle3">Anläggning</h1>
<div id ="applicantframe2">

<input type="text" value ="Typ av anläggning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["anlaggning"].'" name ="anlaggning" readonly id ="infotextframe2"/>

<input type="text" value ="Riktning av borrhål(0&deg = rätt ned):" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["vinkel"].'" name ="vinkel" readonly id ="infotextframe2"/>

<input type="text" value ="Effekt, kW:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["effekt"].'" name ="effekt" readonly id ="infotextframe2"/>
</div>


<h1 id ="overviewareatitle3">Övrigt</h1>
<div id ="applicantframe2">

<input type="text" value ="Borrdjup:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borrdjup"].'" name ="borrdjup" readonly id ="infotextframe2"/>

<input type="text" value ="Köldbärartyp:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["typ_koldbarare"].'" name ="typ_koldbarare" readonly id ="infotextframe2"/>

<input type="text" value ="Kölmedietyp:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["typ_koldmedium"].'" name ="typ_koldmedium" readonly id ="infotextframe2"/>

<input type="text" value ="Kölmediemängd:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["mangd_koldmedium"].'" name ="mangd_koldmedium" readonly id ="infotextframe2"/>

<input type="text" value ="Finns anslutning till kommunalt vatten:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q1_avlopp"].'" name ="q1" readonly id ="infotextframe2"/>

<input type="text" value ="Finns anslutning till kommunalt avlopp:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q2_vatten"].'" name ="q2" readonly id ="infotextframe2"/>

<input type="text" value ="Fastigheten ligger inom skyddsområde för dricksvattentäkt:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q3_skyddsomrade"].'" name ="q3" readonly id ="infotextframe2"/>

<input type="text" value ="Fastigheten har tidigare haft oljeuppvärmning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q4_oljeuppvarmning"].'" name ="q4" readonly id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Borrare</h1>
<div id ="applicantframe2">

<input type="text" value ="Brunnsborrare som anlitas:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_namn"].'" name ="borr_namn" readonly id ="infotextframe2"/>

<input type="text" value ="Telefon:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_tele"].'" name ="borr_tele" readonly id ="infotextframe2"/>

<input type="text" value ="Certifierad:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_certifiering"].'" name ="borr_certifiering" readonly id ="infotextframe2"/>

</div>

<h1 id ="overviewareatitle3">Installatör</h1>
<div id ="applicantframe2">

<input type="text" value ="VVS-installatör som avses anlitas:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_namn"].'" name ="install_namn" readonly id ="infotextframe2"/>

<input type="text" value ="Telefon:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_tele"].'" name ="install_tele" readonly id ="infotextframe2"/>

<input type="text" value ="Certifierad:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_certifiering"].'" name ="install_certifiering" readonly id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Bilagor</h1>
<div id ="applicantframe2">

<input type="text" value ="Karta skickas via post:" readonly id = "infotextframe1"/>
<input type="box" value ="" name ="skickakarta" readonly id ="infotextframe2"/>

<input type="text" value ="Bifogad karta:" readonly id = "infotextframe1"/>
<input type="box" value ="" name ="bifogakarta" readonly id ="infotextframe2"/>
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



