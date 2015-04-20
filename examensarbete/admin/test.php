
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

	<?php	
if(isset($_POST['next'])&&!empty($_POST['fornamn'])&&!empty($_POST['efternamn'])&&!empty($_POST['persnummer'])&&!empty($_POST['adress'])&&!empty($_POST['postnummer'])&&!empty($_POST['port'])&&!empty($_POST['teledag'])){
	$fornamn=mysqli_real_escape_string($con,$_POST['fornamn']);
	$efternamn=mysqli_real_escape_string($con,$_POST['efternamn']);
    $persnummer=mysqli_real_escape_string($con,$_POST['persnummer']);
    $adress=mysqli_real_escape_string($con,$_POST['adress']);
	$postnummer=mysqli_real_escape_string($con,$_POST['postnummer']);	
	$port=mysqli_real_escape_string($con,$_POST['port']);
	$teledag=mysqli_real_escape_string($con,$_POST['teledag']);	
	$alttele=mysqli_real_escape_string($con,$_POST['alttele']);
	$epost=mysqli_real_escape_string($con,$_POST['epost']);	
			        
		$insertContact = "INSERT INTO person values('1','".$fornamn."','".$efternamn."','".$persnummer."','".$adress."','".$postnummer."','".$port."','".$teledag."','".$alttele."','".$epost."')";		
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
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
require_once("include/footer.php");
?>
</body>
</html>



