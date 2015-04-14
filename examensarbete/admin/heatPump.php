
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
  <h1 id = "smallTitle">Värmepump</h1>
		
		<div id = "rowfix">
		<label for="atyp">Typ av anläggning</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "atyp" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="fab">Fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "fab" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="mod">Modell</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "mod" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="angle">Vinkel/riktning av borrhål(0&deg = rätt ned) </label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "angle" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="eff">Effekt, kW</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "eff" id = "requiredtextframe"/>
		</div>
		 
		<div id = "rowfix">
		<label for="ktyp">Typ av köldmedium</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "ktyp" id = "requiredtextframe"/>
		</div>
		  
		<div id = "rowfix">
		<label for="kmed">Mängd köldmedium, kg</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "kmed" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="kollvol">Total volym köldbärarvätska i kollektorn, liter</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "kollvol" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddnamn">Frostskyddsmedel i köldbärarvätskan, namn</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddnamn" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddfabrikat">Frostskyddsmedel i köldbärarvätska, fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddfabrikat" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="frostskyddandel">Andel frostskyddsmedel i köldbärarvätska, %</label><strong id="startDot">*</strong>
		<input required type="text" value = "" name = "frostskyddandel" id = "requiredtextframe"/>
		</div>	
		
		  	<div>	
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Nästa" name ="next" onclick="document.getElementById('checked1').style.backgroundColor = 'lightgreen';">
		</div>
 </form>
 
 <?php	
if(isset($_POST['next'])&&!empty($_POST['atyp'])&&!empty($_POST['fab'])&&!empty($_POST['mod'])&&!empty($_POST['angle'])&&!empty($_POST['eff'])&&!empty($_POST['ktyp'])
				&&!empty($_POST['kmed'])&&!empty($_POST['kollvol'])&&!empty($_POST['frostskyddnamn'])&&!empty($_POST['frostskyddfabrikat'])&&!empty($_POST['frostskyddandel'])){
	$atyp=mysqli_real_escape_string($con,$_POST['atyp']);
    $fab=mysqli_real_escape_string($con,$_POST['fab']);
    $mod=mysqli_real_escape_string($con,$_POST['mod']);	
	$angle=mysqli_real_escape_string($con,$_POST['angle']);
    $eff=mysqli_real_escape_string($con,$_POST['eff']);
    $ktyp=mysqli_real_escape_string($con,$_POST['ktyp']);
	$kmed=mysqli_real_escape_string($con,$_POST['kmed']);
	$kollvol=mysqli_real_escape_string($con,$_POST['kollvol']);
    $frostskyddnamn=mysqli_real_escape_string($con,$_POST['frostskyddnamn']);
    $frostskyddfabrikat=mysqli_real_escape_string($con,$_POST['frostskyddfabrikat']);
	$frostskyddandel=mysqli_real_escape_string($con,$_POST['frostskyddandel']);
			        
		$insertContact = "INSERT INTO varmepump values('2','".$atyp."','".$fab."','".$mod."','".$angle."','".$eff."','".$ktyp."','".$kmed."','".$kollvol."','".$frostskyddnamn."','".$frostskyddfabrikat."','".$frostskyddandel."')";		
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



