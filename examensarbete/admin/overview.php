
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
    <button type="submit" id ="overviewbuttonbig">Ansökningsformuläret</button>
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
<input type="box" value ="'.$irows2["adress"].', '.$irows2["postnum"].' '.$irows2["postort"].'" name ="utdelningsadress" id ="infotextframe2"/>

<input type="text" value ="Person-/Organisationsnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["persnum"].'" name ="persnum" id ="infotextframe2"/>

<input type="text" value ="Telefonnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["tele"].'" name ="tele" id ="infotextframe2"/>

<input type="text" value ="Mobilnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["alt_tele"].'" name ="mobil" id ="infotextframe2"/>

<input type="text" value ="E-Postadress:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["epost"].'" name ="epost" id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Fakturering</h1>
<div id ="applicantframe2">
<input type="text" value ="Fakturamottagare:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_namn"].'" name ="fakt_namn" id ="infotextframe2"/>

<input type="text" value ="Person-/Organisationsnummer:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_persnum"].'" name ="fakt_persnum" id ="infotextframe2"/>

<input type="text" value ="Utdelningsadress(data,box,etc.):" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fakt_adress"].', '.$irows2["fakt_postnum"].' '.$irows2["fakt_postort"].'" name ="utdelningsadress" id ="infotextframe2"/>
</div>



<h1 id ="overviewareatitle3">Fastighet där installation skall ske</h1>
<div id ="applicantframe2">
<input type="text" value ="Fastighetsbeteckning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fastighetsbeteckning"].'" name ="fastighetsbeteckning" id ="infotextframe2"/>

<input type="text" value ="Fastighetens adress:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["fastighet_adress"].', '.$irows2["fastighet_postnr"].' '.$irows2["fastighet_postort"].'" name ="fastighet_adress" id ="infotextframe2"/>
</div>


<h1 id ="overviewareatitle3">Anläggning</h1>
<div id ="applicantframe2">

<input type="text" value ="Typ av anläggning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["anlaggning"].'" name ="anlaggning" id ="infotextframe2"/>

<input type="text" value ="Riktning av borrhål(0&deg = rätt ned):" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["vinkel"].'" name ="vinkel" id ="infotextframe2"/>

<input type="text" value ="Effekt, kW:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["effekt"].'" name ="effekt" id ="infotextframe2"/>
</div>


<h1 id ="overviewareatitle3">Övrigt</h1>
<div id ="applicantframe2">

<input type="text" value ="Borrdjup:" readonly id = "infotextframe1"/>
<input type="box" value ="DB" name ="borrdjup" id ="infotextframe2"/>

<input type="text" value ="Köldbärartyp:" readonly id = "infotextframe1"/>
<input type="box" value ="DB" name ="kolbarartyp" id ="infotextframe2"/>

<input type="text" value ="Kölmedietyp:" readonly id = "infotextframe1"/>
<input type="box" value ="DB" name ="koldmedietyp" id ="infotextframe2"/>

<input type="text" value ="Kölmediemängd:" readonly id = "infotextframe1"/>
<input type="box" value ="DB" name ="koldmediemangd" id ="infotextframe2"/>

<input type="text" value ="Finns anslutning till kommunalt vatten:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q1"].'" name ="q1" id ="infotextframe2"/>

<input type="text" value ="Finns anslutning till kommunalt avlopp:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q2"].'" name ="q2" id ="infotextframe2"/>

<input type="text" value ="Fastigheten ligger inom skyddsområde för dricksvattentäkt:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q3"].'" name ="q3" id ="infotextframe2"/>

<input type="text" value ="Fastigheten har tidigare haft oljeuppvärmning:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["q4"].'" name ="q4" id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Borrare</h1>
<div id ="applicantframe2">

<input type="text" value ="Brunnsborrare som anlitas:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_namn"].'" name ="borr_namn" id ="infotextframe2"/>

<input type="text" value ="Telefon:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_tele"].'" name ="borr_tele" id ="infotextframe2"/>

<input type="text" value ="Certifierad:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["borr_certifiering"].'" name ="borr_certifiering" id ="infotextframe2"/>

</div>

<h1 id ="overviewareatitle3">Installatör</h1>
<div id ="applicantframe2">

<input type="text" value ="VVS-installatör som avses anlitas:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_namn"].'" name ="install_namn" id ="infotextframe2"/>

<input type="text" value ="Telefon:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_tele"].'" name ="install_tele" id ="infotextframe2"/>

<input type="text" value ="Certifierad:" readonly id = "infotextframe1"/>
<input type="box" value ="'.$irows2["install_certifiering"].'" name ="install_certifiering" id ="infotextframe2"/>
</div>

<h1 id ="overviewareatitle3">Bilagor</h1>
<div id ="applicantframe2">

<input type="text" value ="Karta skickas via post:" readonly id = "infotextframe1"/>
<input type="box" value ="" name ="skickakarta" id ="infotextframe2"/>

<input type="text" value ="Bifogad karta:" readonly id = "infotextframe1"/>
<input type="box" value ="" name ="bifogakarta" id ="infotextframe2"/>
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



