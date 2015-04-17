
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
     <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
 <h1 id = "smallTitle">Personuppgifter</h1>

	 <div id = "rowfix">
		<label for="fornamn">Förnamn </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = "" name="fornamn" placeholder="ex. Niklas" id="requiredtextframe"/>
		</div>
	 <div id = "rowfix">
		<label for="efternamn">Efternamn </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = "" name="efternamn" placeholder="ex. Sjögren" id="requiredtextframe"/>
		</div>
	 <div id = "rowfix">			
		<label for="persnummer">Personnummer/Organisationsnummer</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "persnummer" placeholder="ÅÅMMDDXXX" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="adress">Gatuadress</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "adress" placeholder="ex. Brunnsgatan 59" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">		
		<label for="postnummer">Postnummer</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "postnummer" placeholder="ex. 80252" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="port">Postort</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "port" placeholder="ex. Gävle" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="teledag">Telefonnummer dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "teledag" placeholder="Hemnummer eller mobilnummer" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer)</label>
		<input type="text" value = "" name = "alttele" placeholder="Hemnummer eller mobilnummer" id = "opentextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="epost">E-postadress</label>
		<input type="text" value = "" name = "epost" placeholder="ex. Niklas@hotmail.com" id = "opentextframe"/>	
		</div>
		
	<div>	
	<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" name ="next" value="Nästa" onclick="document.getElementById('checked2').style.backgroundColor = 'lightgreen';">
		</div>	
	</form>
	<?php	
if(isset($_POST['next'])&&!empty($_POST['fornamn'])&&!empty($_POST['efternamn'])&&!empty($_POST['persnummer'])&&!empty($_POST['adress'])&&!empty($_POST['postnummer'])&&!empty($_POST['port'])&&!empty($_POST['teledag'])){
	$fornamn=mysqli_real_escape_string($con,$_POST['fornamn']);
	$efternamn=mysqli_real_escape_string($con,$_POST['efternamn']);
    $persnummer=mysqli_real_escape_string($con,$_POST['persnummer']);
    $adress=mysqli_real_escape_string($con,$_POST['adress']);
	$postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);	
	$port=mysqli_real_escape_string($con,$_POST['port']);
	$teledag=mysqli_real_escape_string($con,$_POST['teledag']);	
	$alttele=mysqli_real_escape_string($con,$_POST['alttele']);
	$epost=mysqli_real_escape_string($con,$_POST['epost']);	
			        
		$insertContact = "INSERT INTO person values('1','".$fornamn."','".$efternamn."','".$persnummer."','".$adress."','".$postnummer."','".$port."','".$teledag."','".$alttele."','".$epost."')";		
		 if(mysqli_query($con, $insertContact)){
            echo "<div class='ok'>Informationen har sparats</div>";
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



