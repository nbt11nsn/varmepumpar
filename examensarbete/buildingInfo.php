
<!DOCTYPE html>
<html>
<head>

<?php
echo 'Hello '.($_COOKIE['first_name']!='' ? $_COOKIE['first_name'] : 'Guest');
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
		<label for="port">Fastigheten ligger inom skyddsområde för dricksvattentäkt</label><strong id="startDot">*</strong>
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
		
			<div>	
		<input Type="button" value="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Nästa" name ="next" onclick="document.getElementById('checked1').style.backgroundColor = 'lightgreen';">
		</div>	
		</form>
<?php	
if(isset($_POST['next'])&&!empty($_POST['beteckning'])){
	$beteckning=mysqli_real_escape_string($con,$_POST['beteckning']);
    $adress=mysqli_real_escape_string($con,$_POST['adress']);
    $postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);
	$port=mysqli_real_escape_string($con,$_POST['port']);	
	$q1=mysqli_real_escape_string($con,$_POST['q1']);
    $q2=mysqli_real_escape_string($con,$_POST['q2']);
    $q3=mysqli_real_escape_string($con,$_POST['q3']);
	$q4=mysqli_real_escape_string($con,$_POST['q4']);
			        $checkMaxID = "(Select MAX(ID) from ansokning)";
		$insertContact = "INSERT INTO fastighet values('".$checkMaxID."','".$beteckning."','".$adress."','".$postnummer."','".$port."','".$q1."','".$q2."','".$q3."','".$q4."')";	
		echo $insertContact;
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



