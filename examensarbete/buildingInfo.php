﻿<?php
  defined('THE_BUILDINGINFO') or die();
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
 <div id="infoframe">
    <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
 <h1 id = "smallTitle">Fastighetsuppgifter</h1>

	<div id = "rowfix">
		<label for="beteckning">Fastighetsbeteckning </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = ""  name="beteckning" placeholder="ex. Eldkvarnen 1" id="requiredtextframe"/>
		</div>
	 <div id = "rowfix">			
		<label for="adress">Fastighetens adress(om annan än sökandes adress)</label>
		<input type="text" value = "" name ="adress" placeholder="ex. Brunnsgatan 59" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">		
		<label for="postnummer">Postnummer(om annan än sökandes postnummer)</label>
		<input type="text" value = "" name ="postnummer" placeholder="ex. 80252" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="port">Postort(om annan än sökandes postort)</label>
		<input type="text" value = "" name ="port" placeholder="ex. Gävle" id = "requiredtextframe"/>
		</div>
	
	 <div id = "rowfix">	
		<label for="port">Finns anslutning till kommunalt vatten?</label><strong id="startDot">*</strong>
		<div id ="radiobuttons">
		<INPUT required TYPE="radio" NAME="q2" VALUE="Ja">Ja
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q2" VALUE="Nej">Nej
		</div>
		</div>
	</div>
		
	 <div id = "rowfix">	
		<label for="port">Finns anslutning till kommunalt avlopp?</label><strong id="startDot">*</strong>
		<div id ="radiobuttons">
		<INPUT required TYPE="radio" NAME="q3" VALUE="Ja">Ja
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q3" VALUE="Nej">Nej
		</div>	
		</div>	
	</div>	

	 <div id = "rowfix">	
	 		<div id ="protectionarea">	
		<button type="submit" onclick =window.open("http://gis.gavle.se/pub/vattenskydd/lo/App/Vs1.aspx")>Kolla upp det här</button>
		</div>
		<label for="port">Ligger fastigheten inom skyddsområde för dricksvattentäkt?</label><strong id="startDot">*</strong>		
		
		<div id ="radiobuttons">
		<INPUT required TYPE="radio" NAME="q1" VALUE="Ja, inre">Ja, inre
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q1" VALUE="Ja, yttre">Ja, yttre
		</div>
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q1" VALUE="Nej">Nej
		</div>
		</div>	
	</div>	
		
	 <div id = "rowfix">	
		<label for="port">Fastigheten har tidigare oljeuppvärmning</label><strong id="startDot">*</strong>
		<div id ="radiobuttons">
		<INPUT required TYPE="radio" NAME="q4" VALUE="Ja, cistern tas bort">Ja, cistern tas bort
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q4" VALUE="Ja, cistern kvar">Ja, cistern kvar
		</div>	
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="q4" VALUE="Nej">Nej
		</div>	
		</div>	
	</div>		
		  <div id ="buttondiv">		
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" name ="Spara" value="Spara">
		</div>	
		</form>
		
		<?php	
if(isset($_POST['Spara'])&&!empty($_POST['beteckning'])){
	$beteckning=mysqli_real_escape_string($con,$_POST['beteckning']);
    $adress=mysqli_real_escape_string($con,$_POST['adress']);
    $postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);
	$port=mysqli_real_escape_string($con,$_POST['port']);	
	$q1=mysqli_real_escape_string($con,$_POST['q1']);
    $q2=mysqli_real_escape_string($con,$_POST['q2']);
    $q3=mysqli_real_escape_string($con,$_POST['q3']);
	$q4=mysqli_real_escape_string($con,$_POST['q4']);			        
		$insertContact = "INSERT INTO fastighet values('".$_COOKIE['ID']."','".$beteckning."','".$adress."','".$postnummer."','".$port."','".$q1."','".$q2."','".$q3."','".$q4."')";			
		 if(mysqli_query($con, $insertContact)){
            header("Location: personalDataPage.php");
        }
        else{
            echo "<div class='error'>Du har redan sparat denna information. Du kan gå vidare genom att klicka på flikarna</div>";
        }		
}

?> 
 </div>
</div><!--main-wrapper-->

</body>


</html>



