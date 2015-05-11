<?php
  defined('THE_AFTER') or die();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div id="main-wrapper">
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../db.php');
?>
    <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
<div id="infoframe">
Tack så mycket för att du gjorde deltog i testet.<br>

Har du några synpunkter får du gärna skriva i dessa i textrutan nedanför. Exempelvis:<br> 
		* Var det något som var svårt att förstå?<br> 
		* Kände ni att det var lätt att fylla i rätt information?<br> 
		* Känner ni att det saknas frågor?<br>
		* Var det något ni störde er på?<br> 			
		* Tror ni formuläret kommer bidra till mindre antal kompletteringar?<br> <br> 
		
		Ni får gärna svara på två frågor om ni kan, Svaren skrivs tillsammans med feedbacken:<br> 
		* Vilken är den vanligaste köldbäraren som säljs enligt er?(Om ni kan, skriv gärna två olika köldbärare)<br>
		* Vilken är det vanligaste köldmediumet som säljs enligt er?(Om ni kan, skriv gärna två olika köldmedium)<br>
		<br> <br> 
		Att ge feedback är helt frivilligt. Både positiva och negativa synpunkter kommer att bidra till en bättre slutprodukt. 
</div>
<textarea id ="txtarea" name="infotext" rows="10" cols="70" placeholder="Skriv dina/era kommentarer i denna ruta" onkeyup="countChar(this)">
</textarea>
<div id ="buttondiv2">	
		<input type="submit" value="Skicka in feedback" name ="send">
		</div>
</div><!--main-wrapper-->
		</form>
		<?php	
if(isset($_POST['send'])){
	$infotext=mysqli_real_escape_string($con,$_POST['infotext']);
		$insertContact = "INSERT INTO information values('".$_COOKIE['ID']."','".$infotext."')";			
		 if(mysqli_query($con, $insertContact)){
            echo "<div class='ok'>Tack för informationen</div>";
        }
        else{
            echo "<div class='error'>Du har redan skickat din feedback</div>";
        }		
}
?> 
</body>
</html>



