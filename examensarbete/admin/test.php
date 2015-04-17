
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
	<?php 
	$isqlpers = "SELECT * FROM person, fakturamottagare, fastighet, varmepump";
	?>
<div id="printable">
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
<input type="box" value ="'.$irows2["postnum"].'" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort</div>
<input type="box" value ="'.$irows2["postort"].'" name ="port" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">E-Postadress</div>
<input type="box" value ="'.$irows2["epost"].'" name ="epost" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Fakturamottagare(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_namn"].'" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Organisations-/Postnummer(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_persnum"].'" name ="port" id ="overviewboxmedium"/>
</div>

<div id ="third">
<div id ="overviewtitle">Utdelningsadress(data,box,etc.)</div>
<input type="box" value ="'.$irows2["fakt_adress"].'" name ="epost" id ="overviewboxfull"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postnum"].'" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort(om annan än ovanstående)</div>
<input type="box" value ="'.$irows2["fakt_postort"].'" name ="port" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Fastighet där installation skall ske</h1>
<div id ="applicantframe">

<div id ="second">
<div id ="overviewtitle">Fastighetsbeteckning</div>
<input type="box" value ="'.$irows2["fastighetsbeteckning"].'" name ="epost" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Fastighetens adress(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_adress"].'" name ="epost" id ="overviewboxmedium"/>
</div>

<div id ="second">
<div id ="overviewtitle">Postnummer(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_postnr"].'" name ="pnum" id ="overviewboxmedium"/>
</div>
<div>
<div id ="overviewtitle">Postort(om annan än utdelningsadress)</div>
<input type="box" value ="'.$irows2["fastighet_postort"].'" name ="port" id ="overviewboxmedium"/>
</div>
</div>

<h1 id ="overviewareatitle2">Anläggning</h1>
<div id ="applicantframe">
<div id ="overviewtitle">Typ av anläggning</div>
<input type="box" value ="'.$irows2["anlaggning"].'" name ="epost" id ="overviewboxfull"/>

<div id ="second">
<div id ="overviewtitle">Vinkel/riktning av borrhål(0&deg = rätt ned. Markera riktning på karta)</div>
<input type="box" value ="'.$irows2["vinkel"].'" name ="epost" id ="overviewboxmedium"/>
</div>

<div>
<div id ="overviewtitle">Effekt, kW</div>
<input type="box" value ="'.$irows2["effekt"].'" name ="port" id ="overviewboxsmall"/>
</div>
</div>';

echo '<div id ="applicantframe">';
echo '<div id ="second">';
echo '<div>';
echo '<div id ="overviewtitle">Borrdjup</div>';
echo '<input type="box" value ="" name ="pnum" id ="overviewboxsmall"/>';
echo '</div>';
echo '<div>';
echo '<div id ="overviewtitle">Köldbärartyp</div>';
echo '<input type="box" value ="" name ="port" id ="overviewboxsmall"/>';
echo '</div>';
echo '<div>';
echo '<div id ="overviewtitle">Kölmedietyp</div>';
echo '<input type="box" value ="" name ="port" id ="overviewboxsmall"/>';
echo '</div>';
echo '<div>';
echo '<div id ="overviewtitle">Kölmediemängd</div>';
echo '<input type="box" value ="" name ="port" id ="overviewboxsmall"/>';
echo '</div>';
echo '</div>';
echo '</div>';
		}	
    }
		?>
		</div>
    <input type="button" value="Print" onClick="javascript:window.print();" /><style type="text/css"></style>

</div><!--main-wrapper-->
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
require_once("include/footer.php");
?>
</body>
</html>



