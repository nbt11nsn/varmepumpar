
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
 <h1 id = "smallTitle">Fastighetsuppgifter</h1>

	<div id = "rowfix">
		<label for="namn">Fastighetsbeteckning </label><strong id="startDot">*</strong>
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
	
	<div>	
		<input Type="button" value="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" value="Nästa" name ="next" onclick="document.getElementById('checked1').style.backgroundColor = 'lightgreen';">
		</div>		
		</form>
<?php	
if(isset($_POST['next'])&&!empty($_POST['beteckning'])){
	$name=mysqli_real_escape_string($con,$_POST['beteckning']);
    $pers=mysqli_real_escape_string($con,$_POST['adress']);
    $post=mysqli_real_escape_string($con,$_POST['postnummer']);
	$port=mysqli_real_escape_string($con,$_POST['port']);	
			        
		$insertContact = "INSERT INTO fastighet values('1','".$name."','".$pers."','".$post."','".$port."')";		
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



