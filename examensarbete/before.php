<!DOCTYPE html>
<html>
<head>
<?php
// tar bort all form av felrapportering
// defined('THE_ERROR') || define('THE_ERROR', TRUE);
// require_once('include/no_error.php');

// koppla upp mot databas
// defined('THE_DB') || define('THE_DB', TRUE);
// define('THE_DB', TRUE);
// require_once('../db.php');

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

	<div id = "rowfix">
		<label for="namn">Skriv in ditt personnummer alt organisationsnummer </label><strong id="startDot">*</strong>
		<input required type="text" align="left"  maxlength="50" value = ""  name="persnum" placeholder="ex. 8806087550" id="requiredtextframe"/>
		</div>
	
	<div>	
		<input Type="button" value="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" a href = "personalData.php" value="Nästa" name ="next" onclick="document.getElementById('checked').style.backgroundColor = 'lightgreen';">
		</div>		
	</form>
<?php	
if(isset($_POST['next'])&&!empty($_POST['persnum'])){
	$persn=mysqli_real_escape_string($con,$_POST['persnum']);			        
		$insertContact = "INSERT INTO ansokning values('1','".$persn."','".$persn."','".$persn."','".$persn."','".$persn."','".$persn."',2015-01-01)";		
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



