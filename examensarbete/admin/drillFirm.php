
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
	  <div id = "splitscreen">
	  <div id ="rightscreen">
	<h1 id = "smallTitle">Borrfirma</h1>	
  
		<div id = "rowfix">
		<label for="fnamn">Företagsnamn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "fnamn" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="teledag">Telefonnummer dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "teledag" placeholder="Hemnummer eller mobilnummer" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="alttele">Har företaget certifikat?</label>
		<div id ="radiodesignyes">
		<label for="yes">Ja</label>
		<input type="radio" value = "" name = "yes" id = "radiobutton"/>
			</div>
			<div id ="radiodesignno">
		<label for="yes">Nej</label>
		<input type="radio" value = "" name = "alttele" id = "radiobutton"/>
		</div>
		</div>
		</div>
		
		<h1 id = "smallTitle">Installatör</h1>	
  
		<div id = "rowfix">
		<label for="fnamn">Företagsnamn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "fnamn" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="teledag">Telefonnummer dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "teledag" placeholder="Hemnummer eller mobilnummer" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="alttele">Har företaget certifikat?</label>
		<div id ="radiodesignyes">
				<label for="yes">Ja</label>
		<input type="radio" value = "" name = "yes" id = "radiobutton"/>
		</div>
		<div id ="radiodesignno">
		<label for="yes">Nej</label>
		<input type="radio" value = "" name = "alttele" id = "radiobutton"/>
		</div>
		</div>
		</div>

  	<div>	
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Nästa" name ="next" onclick="document.getElementById('checked5').style.backgroundColor = 'lightgreen';">
		</div>	
</div>		
 </form>
 
 <?php	
if(isset($_POST['next'])&&!empty($_POST['sitac'])&&!empty($_POST['fnamn'])&&!empty($_POST['kontpers'])
		&&!empty($_POST['adress'])&&!empty($_POST['postnummer'])&&!empty($_POST['port'])&&!empty($_POST['teledag'])){
	$sitac=mysqli_real_escape_string($con,$_POST['sitac']);
    $fnamn=mysqli_real_escape_string($con,$_POST['fnamn']);
    $kontpers=mysqli_real_escape_string($con,$_POST['kontpers']);
	$adress=mysqli_real_escape_string($con,$_POST['adress']);	
	$postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);
    $port=mysqli_real_escape_string($con,$_POST['port']);
	$teledag=mysqli_real_escape_string($con,$_POST['teledag']);	
	$alttele=mysqli_real_escape_string($con,$_POST['alttele']);
	$epost=mysqli_real_escape_string($con,$_POST['epost']);
			        
		$insertContact = "INSERT INTO borrfirma values('1','".$sitac."','".$fnamn."','".$kontpers."','".$adress."','".$postnummer."','".$port."','".$teledag."','".$alttele."','".$epost."')";		
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



