
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
  <h1 id = "smallTitle">Värmepump</h1>
		
		<div id = "rowfix">
		<label for="anlaggning">Typ av anläggning</label><strong id="startDot">*</strong>
		<select name ="anlaggning">
		<option value="Bergvärme">Bergvärme</option>
		<option value="Ytvärme">Ytvärme</option>
		<option value="Sjövärme">Sjövärme</option>
		</select>
		</div>
		
		<div id = "rowfix">
		<label for="vinkel">Riktning av borrhål(0&deg = rätt ned) </label><strong id="startDot">*</strong>
		<input required type="text" value ="" name = "vinkel" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="effekt">Effekt, kW</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="effekt" id = "requiredtextframe"/>
		</div>
		
				<div id = "rowfix">
		<label for="borrdjup">Borrdjup, m</label>
		<input type="text" value ="" name ="borrdjup" id = "requiredtextframe"/>
		</div>
		
				<div id = "rowfix">
		<label for="typ_koldbarare">Typ av köldbärare</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="typ_koldbarare" id = "requiredtextframe"/>
		</div>
		 
		<div id = "rowfix">
		<label for="typ_koldmedium">Typ av köldmedium</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="typ_koldmedium" id = "requiredtextframe"/>
		</div>
		  
		<div id = "rowfix">
		<label for="mangd_koldmedium">Mängd köldmedium, kg</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="mangd_koldmedium" id = "requiredtextframe"/>
		</div>
		
		  	<div>	
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" name ="next" value="Nästa" onclick="document.getElementById('checked4').style.backgroundColor = 'lightgreen';">
		</div>
 </form>
 
 <?php	
if(isset($_POST['next'])){	
	$anlaggning=mysqli_real_escape_string($con,$_POST['anlaggning']);	
	$vinkel=mysqli_real_escape_string($con,$_POST['vinkel']);
    $effekt=mysqli_real_escape_string($con,$_POST['effekt']);
	$borrdjup=mysqli_real_escape_string($con,$_POST['borrdjup']);
	$typ_koldbarare=mysqli_real_escape_string($con,$_POST['typ_koldbarare']);
    $typ_koldmedium=mysqli_real_escape_string($con,$_POST['typ_koldmedium']);
	$mangd_koldmedium=mysqli_real_escape_string($con,$_POST['mangd_koldmedium']);  
	
		$insertContact = "INSERT INTO varmepump values('2','".$anlaggning."','".$vinkel."','".$effekt."','".$borrdjup."','".$typ_koldbarare."','".$typ_koldmedium."','".$mangd_koldmedium."')";		
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



