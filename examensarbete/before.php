<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Niklas Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
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
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
require_once("include/header.php");
?>
<div id="main-wrapper">
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
		<input type="submit" value="Påbörja en ansökan" name ="next" onclick="document.getElementById('checked').style.backgroundColor = 'lightgreen';">
		</div>		
	</form>

	<?php	
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;
$REMOTE_ADDR=$hostname;
$ip= $REMOTE_ADDR;
echo " Your hostname : " . GetHostByName($ip);

if(isset($_POST['next'])){
	$test = "test";
	$persn=mysqli_real_escape_string($con,$test);
	$insertContact = "INSERT INTO ansokning values('".$contractid."','".$persn."','".$persn."','".$persn."','".$persn."','".$persn."','".$persn."',2015-01-01)";			
		 if(mysqli_query($con, $insertContact)){
           
        }
        else{
            echo "<div class='error'>Lyckades inte spara informationen</div>";
	  }		
}
?>    
	
 </div>
</div><!--main-wrapper-->


</body>
</html>



