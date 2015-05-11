<?php
  defined('THE_MAP') or die(); 
?>
<!DOCTYPE html>
<html>
<head>

<script language="javascript" type="text/javascript" src = "include/print.js?"></script>

<?php echo "<script> closed(); </script>"; 
?>
</head>
<body>

<div id="main-wrapper">
 <div id="infoframe">
  <h1 id = "smallTitle">Bifoga karta</h1>		
<div id ="sendmap">  
<input type='checkbox' class='checkbox_' id = "chkbox";	
		<label id="skickakarta">Jag skickar kartan via post </label>
		    <div class="reveal-if-active">
<div id="infotextdropdown">
<div id ="question">Skicka kartan till:</div>
<div id ="info">Gävle kommun, Samhällsbyggnad Gävle, 801 84 GÄVLE</div>
</div>
		</div>
</div>
<div id="mapinfo">
Detta är de krav som måste vara ifyllda på kartan för att tillstånd skall beviljas:<br>
1. Markering vart värmepumpen skall placeras måste markeras<br>
2. Om närliggande vattentäkter finns inom 50m från borrhål skall dessa markeras<br>
3. Om närliggande värmepumpar/borrhål finns inom 50m från borrhål skall dessa markeras<br>
4. Om närliggande avloppsanläggningar inom 50m från borrhål finns skall dessa markeras<br>
5. Om enskild brunn finns måste detta markeras<br>
6. Avstånd från borrhål till avloppsanläggning måste markeras<br>
7. Om vattenbrunn finns, är den då borrad eller grävd?<br>
8. Om vattentäkt finns, är den då borrad eller grävd?<br>
9. Om det redan finns en anläggning och en ny skall installeras måste uppgifter om avståndet mellan dessa redovisas<br>
10. Om enskilt infilterande avloppsanläggningar finns måste det markeras på kartan vart infiltrationen är samt avståndet mellan infiltration till borrhålet<br>
11. Avstånd från brunn till avloppsanläggning måste markeras<br>
12. Om eventuella delar av avloppet ligger inom skyddsområde måste detta markeras<br>

<br>
<br>
13. Om skyddsåtgärder behöver göras tänker jag göra följande(max 1000 tecken):

<textarea id ="txtarea" name="txtarea" rows="4" cols="50" placeholder ="För tillfället sparas ej denna information" onkeyup="countChar(this)">
</textarea>
 <div id="charNum"></div>
</div>
</div>

	 		<div id ="pdf_title">	
			<label for="godkännande" >Är du osäker på om du bor inom vattenskyddat område?</label>	
		<button type="submit" onclick =window.open("http://gis.gavle.se/pub/vattenskydd/lo/App/Vs1.aspx")>Kolla upp det här</button>
		</div>

	<div id ="pdf_title">
	<input required type='checkbox' class='checkbox_' id = "chkbox";	
	<label for="godkännande" >Jag är införstådd i vad som måste fyllas i på kartan för att inte behöva skicka in kompletterande uppgifter. Jag är även införstådd i att detta måste vara tydligt markerat på kartan.</label>	
	</div>

</div><!--main-wrapper-->
		  <div id ="buttondiv">		
		<input Type="button" VALUE="Tillbaka" onClick="history.go(-1);return true;">
		<input type="submit" name ="Spara" onClick="closed()" value="Spara">
		</div>
</body>
</html>



