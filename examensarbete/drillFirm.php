
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
require_once(__DIR__ .'./../db.php');
?>
 <div id="infoframe">
      <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
	  <div id = "splitscreen">
	  <div id ="rightscreen">
	<h1 id = "smallTitle">Borrfirma</h1>	
  
		<div id = "rowfix">
		<label for="borr_namn">Företagsnamn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name ="borr_namn" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="borr_tele">Telefonnummer dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name ="borr_tele" placeholder="Hemnummer eller mobilnummer" id = "requiredtextframe"/>
		</div>
	 <div id = "rowfix">	
		<label for="borr_certifiering">Har företaget certifikat?</label>
		<div id ="radiobuttons">
		<INPUT TYPE="radio" NAME="borr_certifiering" VALUE="Ja">Ja
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="borr_certifiering" VALUE="Nej">Nej
		</div>
		</div>
		</div>
		</div>
		
		<h1 id = "smallTitle">Installatör</h1>	
  
		<div id = "rowfix">
		<label for="install_namn">Företagsnamn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name ="install_namn" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="install_tele">Telefonnummer dagtid(inklusive riktnummer)</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name ="install_tele" placeholder="Hemnummer eller mobilnummer" id = "requiredtextframe"/>
		</div>
		
	 <div id = "rowfix">	
		<label for="install_certifiering">Har företaget certifikat?</label>
		<div id ="radiobuttons">
		<INPUT TYPE="radio" NAME="install_certifiering" VALUE="Ja">Ja
		<div id="radiomargin">
		<INPUT TYPE="radio" NAME="install_certifiering" VALUE="Nej">Nej
		</div>
		</div>
		</div>
		</div>

  	<div id= "buttons">		
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Nästa" name ="next" onclick="document.getElementById('checked5').style.backgroundColor = 'lightgreen';">
		</div>	
</div>		
 </form>
 
 <?php	
if(isset($_POST['next'])&&!empty($_POST['borr_namn'])&&!empty($_POST['borr_tele'])&&!empty($_POST['borr_certifiering'])
		&&!empty($_POST['install_namn'])&&!empty($_POST['install_tele'])&&!empty($_POST['install_certifiering'])){
	$borr_namn=mysqli_real_escape_string($con,$_POST['borr_namn']);
    $borr_tele=mysqli_real_escape_string($con,$_POST['borr_tele']);
    $borr_certifiering=mysqli_real_escape_string($con,$_POST['borr_certifiering']);
	$install_namn=mysqli_real_escape_string($con,$_POST['install_namn']);	
	$install_tele=mysqli_real_escape_string($con,$_POST['install_tele']);
    $install_certifiering=mysqli_real_escape_string($con,$_POST['install_certifiering']);
			   $checkMaxID = "(Select MAX(ID) from ansokning)";     
		$insertContact = "INSERT INTO borrfirma values('".$checkMaxID."','".$borr_namn."','".$borr_tele."','".$borr_certifiering."')";		
		$insertContact2 = "INSERT INTO installator values('".$checkMaxID."','".$install_namn."','".$install_tele."','".$install_certifiering."')";
		$checkMaxID = "(Select MAX(ID) from ansokning)";

		echo $insertContact;
		echo $insertContact2;
		 if(mysqli_query($con, $insertContact) && mysqli_query($con, $insertContact2)){
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



