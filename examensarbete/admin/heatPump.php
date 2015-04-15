
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
		<label for="anlaggning">Typ av anläggning</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="anlaggning" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="fabrikat">Fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="fabrikat" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="modell">Modell</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="modell" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="vinkel">Vinkel/riktning av borrhål(0&deg = rätt ned) </label><strong id="startDot">*</strong>
		<input required type="text" value ="" name = "vinkel" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="effekt">Effekt, kW</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="effekt" id = "requiredtextframe"/>
		</div>
		 
		<div id = "rowfix">
		<label for="typ_koldmedium">Typ av köldmedium</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="typ_koldmedium" id = "requiredtextframe"/>
		</div>
		  
		<div id = "rowfix">
		<label for="mangd_koldmedium">Mängd köldmedium, kg</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="mangd_koldmedium" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="volym_koldbararvatska">Total volym köldbärarvätska i kollektorn, liter</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="volym_koldbararvatska" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="namn_koldbararvatska">Frostskyddsmedel i köldbärarvätskan, namn</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="namn_koldbararvatska" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="fabrikat_koldbararvatska">Frostskyddsmedel i köldbärarvätska, fabrikat</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="fabrikat_koldbararvatska" id = "requiredtextframe"/>
		</div>
		
		<div id = "rowfix">
		<label for="andel_frostskyddsmedel">Andel frostskyddsmedel i köldbärarvätska, %</label><strong id="startDot">*</strong>
		<input required type="text" value ="" name ="andel_frostskyddsmedel" id = "requiredtextframe"/>
		</div>	
		
		  	<div>	
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" name ="next" value="Nästa" onclick="document.getElementById('checked2').style.backgroundColor = 'green';">
		</div>
 </form>
 
 <?php	
if(isset($_POST['next'])&&!empty($_POST['anlaggning'])&&!empty($_POST['fabrikat'])&&!empty($_POST['modell'])&&!empty($_POST['vinkel'])&&!empty($_POST['effekt'])
						&&!empty($_POST['typ_koldmedium'])&&!empty($_POST['mangd_koldmedium'])&&!empty($_POST['volym_koldbararvatska'])&&!empty($_POST['namn_koldbararvatska'])
						&&!empty($_POST['fabrikat_koldbararvatska'])&&!empty($_POST['andel_frostskyddsmedel'])){
				
	$anlaggning=mysqli_real_escape_string($con,$_POST['anlaggning']);
    $fabrikat=mysqli_real_escape_string($con,$_POST['fabrikat']);
    $modell=mysqli_real_escape_string($con,$_POST['modell']);	
	$vinkel=mysqli_real_escape_string($con,$_POST['vinkel']);
    $effekt=mysqli_real_escape_string($con,$_POST['effekt']);
    $typ_koldmedium=mysqli_real_escape_string($con,$_POST['typ_koldmedium']);
	$mangd_koldmedium=mysqli_real_escape_string($con,$_POST['mangd_koldmedium']);
	$volym_koldbararvatska=mysqli_real_escape_string($con,$_POST['volym_koldbararvatska']);
    $namn_koldbararvatska=mysqli_real_escape_string($con,$_POST['namn_koldbararvatska']);
    $fabrikat_koldbararvatska=mysqli_real_escape_string($con,$_POST['fabrikat_koldbararvatska']);
	$andel_frostskyddsmedel=mysqli_real_escape_string($con,$_POST['andel_frostskyddsmedel']);    
		$insertContact = "INSERT INTO varmepump values('2','".$anlaggning."','".$fabrikat."','".$modell."',
		'".$vinkel."','".$effekt."','".$typ_koldmedium."','".$mangd_koldmedium."','".$volym_koldbararvatska."','".$namn_koldbararvatska."',
		'".$fabrikat_koldbararvatska."','".$andel_frostskyddsmedel."')";		
		
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



