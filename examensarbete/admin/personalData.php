
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
		<label for="namn">Namn </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = "" name="namn" placeholder="ex. Niklas Sjögren" id="requiredtextframe"/>

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
		<input type="submit" name ="next" value="Nästa" onclick="document.getElementById('checked2').style.backgroundColor = 'green';">
		</div>	
	</form>
	<?php	
if(isset($_POST['next'])&&!empty($_POST['namn'])&&!empty($_POST['persnummer'])&&!empty($_POST['adress'])&&!empty($_POST['postnummer'])&&!empty($_POST['port'])&&!empty($_POST['teledag'])){
	$namn=mysqli_real_escape_string($con,$_POST['namn']);
    $persnummer=mysqli_real_escape_string($con,$_POST['persnummer']);
    $adress=mysqli_real_escape_string($con,$_POST['adress']);
	$postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);	
	$port=mysqli_real_escape_string($con,$_POST['port']);
	$teledag=mysqli_real_escape_string($con,$_POST['teledag']);	
	$alttele=mysqli_real_escape_string($con,$_POST['alttele']);
	$epost=mysqli_real_escape_string($con,$_POST['epost']);	
			        
		$insertContact = "INSERT INTO person values('1','".$namn."','".$persnummer."','".$adress."','".$postnummer."','".$port."','".$teledag."','".$alttele."','".$epost."')";		
		echo $insertContact;
		 if(mysqli_query($con, $insertContact)){
            echo "<div class='ok'>Ny användare har skapats</div>";
        }
        else{
            echo "<div class='error'>Lyckades inte lägga till en ny användare</div>";
        }		
}
?> 
 </div>
</div><!--main-wrapper-->

</body>
</html>



