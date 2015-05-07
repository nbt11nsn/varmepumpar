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
		Tack för att du tar dig tid till att testa detta formulär som är en utvecklad e-tjänst för ansökan om tillstånd för värmepumpsanläggning. 
		Detta är endast ett betatest så vissa funktionsfel kan uppkomma<br><br> 
		Efter att ansökan är klar och ni klickat på "skicka in ansökan" som kommer finnas på översiktssidan 
		så kommer en sida upp där ni kan ge feedback om ni har något att tillägga.<br><br> 
		
		Som sagt så är detta ett test och informationen som skrivs kommer INTE att resultera i en riktig ansökan.<br>
		När ni är klar och klickat på "skicka ansökan" som finns under fliken översikt så kommer ni komma till en sida där några frågor ställs och möjlighet till feedback finns att lämna.
		
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
           echo "<div class='error'>Ett ID har skapats för din ansökan. Du kan nu gå vidare genom att klicka på flikarna</div>";
		   
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



