<?php
  defined('THE_AFTER') or die();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div id="main-wrapper">
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../db.php');
?>

<div id="infoframe">
Tack så mycket för att du gjorde deltog i testet.<br>
Har du några synpunkter får du gärna skriva i dessa i textrutan nedanför.<br> 
Både positiva och negativa synpunkter kommer att bidra till en bättre slutprodukt. 
</div>
<textarea id ="txtarea" name="txtarea" rows="10" cols="70" placeholder="Skriv dina/era kommentarer i denna ruta" onkeyup="countChar(this)">
</textarea>
</div><!--main-wrapper-->


</body>
</html>



