<?php
  defined('THE_BEFORE') or die();
?>
<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript" src = "include/print.js?"></script>
</head>
<body>
<div id="main-wrapper">
 <div id="infoframe">
    <form action='' method='post' id ='postContracts' enctype="multipart/form-data">
	<div id ="informationtesttext">
		Tack för att du tar dig tid till att testa detta formulär som är en utvecklad e-tjänst för ansökan om tillstånd för värmepumpsanläggning. <br><br> 
		
		Detta är endast ett betatest så vissa funktionsfel kan uppkomma. Även den informationen som skrivs kommer INTE att resultera i en riktig ansökan.<br><br>
		När du är klar och klickat på "skicka ansökan" som finns under fliken "Översikt"" så kommer du att komma till en sida där några frågor ställs och möjlighet till feedback finns att lämna.
		<br><br>OBS! Om inte alla delar är ifyllda och sparade så kommer ingen information att synas i fliken "Översikt"<br>Om det är någon fråga du inte kan svara på så skriv "Vet ej".
	</div>	
		



	<div id ="buttondiv2">	
		<input type="submit" value="Påbörja en ansökan" name ="next">
		</div>	
</form>
	<?php	

if(isset($_POST['next'])){
	$getDate = "(SELECT CURDATE())";
	$insertContact = "INSERT INTO ansokning values('".$_COOKIE['ID']."',".$getDate.")";		
		 if(mysqli_query($con, $insertContact)){
		   header("Location: buildingInfoPage.php");
		   
        }
        else{
              echo "<div class='error'>Du har redan påbörjat en ansökan. Du kan gå vidare genom att klicka på flikarna</div>";
	  }		
}
?>	
 </div>
</div><!--main-wrapper-->

</body>
</html>



