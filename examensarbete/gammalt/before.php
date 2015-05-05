<!DOCTYPE html>
<html>
<?php
  defined('THE_BEFORETEST') or die();
?>
<head>
<?php
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
<script language="javascript" type="text/javascript" src = "include/print.js?"></script>
<script language="javascript" type="text/javascript" src = "include/print.js?"></script>
<script language="javascript" type="application/javascript" src = "include/print.js"></script>
</head>
<body>
<div id="main-wrapper">
<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
require_once("include/header.php");
?>

<?php
defined('THE_MENUE') || define('THE_MENUE', TRUE);
require_once("include/menuebar.php");
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../db.php');
?>
 <div id="infoframe">
    <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
	<div id ="informationtesttext">
		Tack för att du tar dig tid till att testa detta formulär som är en utvecklad e-tjänst för ansökan om tillstånd för värmepumpsanläggning. 
		Detta är endast ett betatest så vissa designfel och funktionsfel kan uppkomma<br><br> 
		Efter att ansökan är klar och ni klickat på "skicka in ansökan" som kommer finnas på översiktssidan 
		så kommer en sida upp där ni kan ge feedback om ni har något att tillägga.<br><br> 
		
		Några synpunkter skulle kunna vara:<br> 
		* Var det något som var svårt att förstå?<br> 
		* Kände ni att det var lätt att fylla i rätt information(t.ex för kölmedium, köldbärare)?<br> 
		* Känner ni att det saknas frågor?<br> 
		* Tror ni formuläret kommer hjälpa eller stjälpa etc.<br> <br> 
		Att ge feedback är helt fritt. Om ni inte kommer på något att skriva så är det bara klicka på "avsluta".
	</div>
		
	<div>	
		<input Type="button" value="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Påbörja en ansökan" name ="next">
		</div>		
</form>
	<?php	

if(isset($_POST['next'])){
	$getDate = "(SELECT CURDATE())";
	$insertContact = "INSERT INTO ansokning values('".$_COOKIE['ID']."',".$getDate.")";		
		 if(mysqli_query($con, $insertContact)){
           echo "<div class='error'>Lyckades spara informationen och har ID:".$_COOKIE['ID']." </div>";
		   
        }
        else{
              echo "<div class='error'>Lyckades inte spara informationen och har ID:".$_COOKIE['ID']." </div>";
	  }		
}
?>    
	
 </div>
</div><!--main-wrapper-->


</body>
</html>



